<?php

namespace App\Models;

use App\Facades\CampaignLocalization;
use App\Facades\UserPermission;
use App\Models\Concerns\Blameable;
use App\Models\Concerns\SimpleSortableTrait;
use App\Traits\VisibilityTrait;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 * Class EntityAbility
 * @package App\Models
 *
 * @property integer $entity_id
 * @property integer $ability_id
 * @property string $visibility
 * @property integer $charges
 * @property integer $position
 * @property string $note
 * @property integer $created_by
 * @property Ability $ability
 * @property Entity $entity
 *
 * @method static Builder|self defaultOrder()
 */
class EntityAbility extends Model
{
    /**
     * Fillable fields
     */
    public $fillable = [
        'entity_id',
        'ability_id',
        'visibility',
        'created_by',
        'charges',
        'position',
        'note',
    ];

    use VisibilityTrait, SimpleSortableTrait, Blameable;

    /**
     * Set to false to skip save observers
     * @var bool
     */
    public $savedObserver = true;

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function entity(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo('App\Models\Entity');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function ability(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo('App\Models\Ability');
    }

    /**
     * Who created this entry
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function creator()
    {
        return $this->belongsTo('App\User', 'created_by');
    }

    /**
     * List of recently used positions for the form suggestions
     * @return mixed
     */
    public static function positionList()
    {
        $campaign = CampaignLocalization::getCampaign();
        return self::acl()
            ->groupBy('a.type')
            ->leftJoin('entities as e', 'e.id', 'inventories.entity_id')
            ->leftJoin('abilities as a', 'a.id', 'inventories.ability_id')
            ->where('e.campaign_id', $campaign->id)
            ->orderBy('a.type', 'ASC')
            ->limit(20)
            ->pluck('a.type')
            ->all();
    }

    /**
     * @param Builder $query
     * @return Builder
     */
    public function scopeDefaultOrder(Builder $query)
    {
        return $query
            ->orderBy('position')
            ->orderBy('a.type')
            ->orderBy('a.name');
    }

    /**
     * Scope a query to only include elements that are visible
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @param mixed $type
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeAcl($query, $action = 'read', $user = null)
    {
        // Use the User Permission Service to handle all of this easily.
        /** @var \App\Services\UserPermission $service */
        $service = UserPermission::user($user)->action($action);

        if ($service->isCampaignOwner()) {
            return $query;
        }

        return $query
            ->select('entity_abilities.*')
            ->join('abilities', 'entity_abilities.ability_id', '=', 'abilities.id')
            ->join('entities', function ($join) {
                $join->on('entities.entity_id', '=', 'items.id')
                    ->where('entities.type', '=', 'ability');
            })
            ->where('entities.is_private', false)
            ->where(function ($subquery) use ($service) {
                return $subquery
                    ->where(function ($sub) use ($service) {
                        return $sub->whereIn('entities.id', $service->entityIds())
                            ->orWhereIn('entities.type', $service->entityTypes());
                    })
                    ->whereNotIn('entities.id', $service->deniedEntityIds());
            });
    }

    /**
     * Copy an entity ability to another target
     * @param Entity $target
     */
    public function copyTo(Entity $target)
    {
        $new = $this->replicate(['entity_id']);
        $new->entity_id = $target->id;
        return $new->save();
    }
}
