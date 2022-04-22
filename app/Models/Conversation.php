<?php

namespace App\Models;

use App\Traits\CampaignTrait;
use App\Traits\ExportableTrait;
use App\Traits\VisibleTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Conversation
 * @package App\Models
 * @property string $name
 * @property string $image
 * @property string $slug
 * @property string $type
 * @property int $target_id
 * @property bool $is_private
 * @property bool $is_closed
 */
class Conversation extends MiscModel
{
    use CampaignTrait,
        VisibleTrait,
        ExportableTrait,
        SoftDeletes;

    //
    protected $fillable = [
        'name',
        'image',
        'slug',
        'type',
        'campaign_id',
        'target_id',
        'is_private',
        'is_closed'
    ];

    const TARGET_USERS = 1;
    const TARGET_CHARACTERS = 2;

    /**
     * Entity type
     * @var string
     */
    protected $entityType = 'conversation';

    /**
     * Searchable fields
     * @var array
     */
    protected $searchableColumns  = ['name'];

    /**
     * Fields that can be filtered on
     * @var array
     */
    protected $filterableColumns = [
        'target_id',
        'is_closed',
    ];

    /**
     * Fields that can be sorted on
     * @var array
     */
    protected $sortableColumns = [
        'target_id',
        'colour',
    ];

    /**
     * Set to false if this entity type doesn't have relations
     * @var bool
     */
    public $hasRelations = false;

    /**
     * Field used for tooltips
     * @var string
     */
    protected $tooltipField = 'name';

    /**
     * Foreign relations to add to export
     * @var array
     */
    protected $foreignExport = [
        'participants', 'messages'
    ];

    /**
     * @var string[] Extra relations loaded for the API endpoint
     */
    public $apiWith = ['messages', 'participants'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function messages()
    {
        return $this->hasMany('App\Models\ConversationMessage', 'conversation_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function participants()
    {
        return $this->hasMany('App\Models\ConversationParticipant', 'conversation_id');
    }

    /**
     * Get a list of participants
     * @return array
     */
    public function participantsList($withNames = true)
    {
        $participants = [];
        foreach ($this->participants as $participant) {
            if (auth()->check() && auth()->user()->can('update', $participant->character)) {
                $participants[$participant->id()] = $participant->name();
            }
        }

        if (!$withNames) {
            return array_keys($participants);
        }

        return $participants;
    }

    /**
     * @return false|string
     */
    public function jsonParticipants() {
        return json_encode($this->participantsList());
    }

    /**
     * Get the entity_type id from the entity_types table
     * @return int
     */
    public function entityTypeId(): int
    {
        return (int) config('entities.ids.conversation');
    }

    /**
     * @return mixed
     */
    public function entry()
    {
        return '';
    }

    /**
     * @return bool
     */
    public function forCharacters(): bool
    {
        return $this->target_id == self::TARGET_CHARACTERS;
    }

    /**
     * Determine if the model has profile data to be displayed
     * @return bool
     */
    public function showProfileInfo(): bool
    {
        return true;
    }
}
