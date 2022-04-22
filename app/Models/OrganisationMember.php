<?php

namespace App\Models;

use App\Models\Concerns\Filterable;
use App\Models\Concerns\Paginatable;
use App\Models\Concerns\SimpleSortableTrait;
use App\Traits\AclTrait;
use App\Traits\VisibleTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Query\Builder;

/**
 * Class OrganisationMember
 * @package App\Models
 *
 * @property integer $id
 * @property integer $character_id
 * @property integer $organisation_id
 * @property integer $parent_id
 * @property string $role
 * @property bool $is_private
 * @property int $pin_id
 * @property int $status_id
 * @property Character $character
 * @property Organisation $organisation
 * @property OrganisationMember $parent
 *
 */
class OrganisationMember extends Model
{
    use Paginatable, VisibleTrait, Filterable, SimpleSortableTrait;

    /**
     * ACL Trait config
     * We want to get permissions on the character to know if we can see them
     */
    use AclTrait;

    const PIN_CHARACTER = 1;
    const PIN_ORGANISATION = 2;
    const PIN_BOTH = 3;

    const STATUS_ACTIVE = 0;
    const STATUS_INACTIVE = 1;
    const STATUS_UNKNOWN = 2;

    public $entityType = 'character';
    public $aclFieldName = 'character_id';

    public $table = 'organisation_member';

    protected $filterableColumns = ['organisation_id'];

    protected $fillable = [
        'organisation_id',
        'character_id',
        'role',
        'is_private',
        'pin_id',
        'status_id',
        'parent_id',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function character()
    {
        return $this->belongsTo('App\Models\Character', 'character_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function organisation()
    {
        return $this->belongsTo('App\Models\Organisation', 'organisation_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function parent()
    {
        return $this->belongsTo('App\Models\OrganisationMember', 'parent_id');
    }

    /**
     * @return bool
     */
    public function pinned(): bool
    {
        return !empty($this->pin_id);
    }

    /**
     * @return bool
     */
    public function pinnedToCharacter(): bool
    {
        return $this->pin_id == self::PIN_CHARACTER;
    }

    /**
     * @return bool
     */
    public function pinnedToOrganisation(): bool
    {
        return $this->pin_id == self::PIN_ORGANISATION;
    }

    /**
     * @return bool
     */
    public function pinnedToBoth(): bool
    {
        return $this->pin_id == self::PIN_BOTH;
    }

    /**
     * @return bool
     */
    public function inactive(): bool
    {
        return $this->status_id === self::STATUS_INACTIVE;
    }

    /**
     * @return bool
     */
    public function unknown(): bool
    {
        return $this->status_id === self::STATUS_UNKNOWN;
    }
    /**
     * @param Builder $query
     * @param int $pin
     * @return Builder
     */
    public function scopePinned(Builder $query, int $pin)
    {
        return $query->where('pin_id', $pin);
    }
}
