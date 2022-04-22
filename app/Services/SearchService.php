<?php

namespace App\Services;

use App\Models\Calendar;
use App\Models\Campaign;
use App\Models\Entity;
use Illuminate\Support\Str;

class SearchService
{
    /**
     * The search term
     * @var string
     */
    protected $term;

    /**
     * The search entity type
     * @var string
     */
    protected $type;

    /**
     * The campaign
     * @var Campaign
     */
    protected $campaign;

    /**
     * Amount of results (sql limit)
     * @var int
     */
    protected $limit = 10;

    /**
     * @var EntityService
     */
    protected $entityService;

    /**
     * List of excluded entity types
     * @var array
     */
    protected $excludedTypes = [];

    /**
     * List of excluded entity ids
     * @var array
     */
    protected $excludeIds = [];

    /**
     * List of the only entity types desired
     * @var array
     */
    protected $onlyTypes = [];

    /**
     * Set to true for a full result (rather than id => name)
     * @var bool
     */
    protected $full = false;

    /**
     * Set to true to return new entity options
     * @var bool
     */
    protected $new = false;

    /**
     * SearchService constructor.
     * @param EntityService $entityService
     */
    public function __construct(EntityService $entityService)
    {
        $this->entityService = $entityService;
    }

    /**
     * The search term as requested by the user
     * @param $term
     * @return $this
     */
    public function term($term)
    {
        $this->term = $term;
        return $this;
    }

    /**
     * The search entity type as requested by the user
     * @param $type
     * @return $this
     */
    public function type($type)
    {
        if (!empty($type)) {
            $typeID = config('entities.ids.' . $type);
            $this->onlyTypes = [$typeID];
        }
        return $this;
    }

    /**
     * @param Campaign $campaign
     * @return $this
     */
    public function campaign(Campaign $campaign)
    {
        $this->campaign = $campaign;
        return $this;
    }

    /**
     * @param bool $new = false
     * @return $this
     */
    public function new(bool $new = false)
    {
        $this->new = $new;
        return $this;
    }

    /**
     * @param int $limit
     * @return $this
     */
    public function limit($limit = 10)
    {
        $this->limit = $limit;
        return $this;
    }

    /**
     * @param $types
     * @return $this
     */
    public function exclude($types)
    {
        $this->excludedTypes = is_array($types) ? $types : [$types];
        return $this;
    }

    /**
     * @param array|string $ids
     * @return $this
     */
    public function excludeIds($ids): self
    {
        if (empty($ids)) {
            $this->excludeIds = [];
            return $this;
        }
        if (!is_array($ids)) {
            $ids = [$ids];
        }
        $this->excludeIds = $ids;
        return $this;
    }

    /**
     * @param $types
     * @return $this
     */
    public function only($types)
    {
        $this->onlyTypes = is_array($types) ? $types : [$types];
        return $this;
    }

    /**
     * Set the result as full (live search, mentions)
     * @return $this
     */
    public function full()
    {
        $this->full = true;
        return $this;
    }

    /**
     * List of entities matching the request
     * @return array
     */
    public function find()
    {
        // Figure out what kind of entities we want.
        $availableEntityTypes = $this->entityService
            ->campaign($this->campaign)
            ->getEnabledEntitiesID();

        // If a list of types are provided, use those
        if (!empty($this->onlyTypes)) {
            $availableEntityTypes = $this->onlyTypes;
        }
        // If a list of excluded types are provided, remove them from the results
        if (!empty($this->excludedTypes)) {
            $availableEntityTypes = array_diff($availableEntityTypes, $this->excludedTypes);
        }

        $cleanTerm = ltrim(str_replace('_', ' ', $this->term), '=');
        $query = Entity::inTypes($availableEntityTypes);
        if (empty($this->term)) {
            $query->orderBy('updated_at', 'DESC');
        } else {
            if ($this->campaign->boosted()) {
                $query
                    ->select(['entities.*', 'ea.id as alias_id', 'ea.name as alias_name'])
                    ->distinct()
                    ->leftJoin('entity_aliases as ea', function ($join) use ($cleanTerm) {
                        $join->on('ea.entity_id', '=', 'entities.id');
                        if (Str::startsWith($this->term, '=')) {
                            $join->where('ea.name', $cleanTerm);
                        } else {
                            $join->where('ea.name', 'like', '%' . $this->term . '%');
                        }
                    })
                    ->where(function ($sub) use ($cleanTerm) {
                        if (Str::startsWith($this->term, '=')) {
                            $sub->where('entities.name', $cleanTerm)
                                ->orWhere('ea.name', $cleanTerm)
                            ;
                        } else {
                            $sub->where('entities.name', 'like', '%' . $this->term . '%')
                                ->orWhere('ea.name', 'like', '%' . $this->term . '%')
                            ;
                        }
                    });
            } else {
                if (Str::startsWith($this->term, '=')) {
                    $query->where('name', ltrim($this->term, '='));
                } else {
                    $query->where('name', 'like', '%' . $this->term . '%');
                }
            }
        }

        if (!empty($this->excludeIds)) {
            $query->whereNotIn('entities.id', $this->excludeIds);
        }

        $query
            ->acl()
            ->limit($this->limit);

        $searchResults = [];
        foreach ($query->get() as $model) {
            // Force having a child for "ghost" entities.
            if (empty($model->child)) {
                continue;
            }
            $img = '';
            if (!empty($model->child->image)) {
                $img = '<span class="entity-image" style="background-image: url(\''
                    . $model->child->getImageUrl(40) . '\');"></span> ';
            }

            $parsedName = str_replace('&#039;', '\'', e($model->name));
            if (!$this->full) {
                $searchResults[] = [
                    'id' => $model->id,
                    'text' => $parsedName . ' (' . __('entities.' . $model->type()) . ')'
                ];
                continue;
            }

            $searchResults[] = [
                'id' => $model->id,
                'fullname' => $parsedName,
                'image' => $img,
                'name' => $parsedName,
                'type' => __('entities.' . $model->type()),
                'model_type' => $model->type(),
                'tooltip' => $model->tooltip(),
                'url' => $model->url(),
                'alias_id' => $model->alias_id,
            ];
        }

        if (empty($searchResults) && $this->new) {
            return $this->newOptions();
        }

        return $searchResults;
    }

    /**
     * List of months in the calendars
     * @return array
     */
    public function monthList()
    {
        $searchResults = [];

        // Load up the calendars of a campaign to get the month names
        $calendars = Calendar::get();
        foreach ($calendars as $calendar) {
            $months = $calendar->months();

            foreach ($months as $month) {
                if ((!empty($this->term) && strpos($month['name'], $this->term) !== false) || empty($this->term)) {
                    $searchResults[] = [
                        'fullname' => $month['name'],
                        'name' => $month['name'] . ' (' . $calendar->name . ')',
                    ];
                }
            }
        }

        return $searchResults;
    }

    /**
     * List of elements that can be created on the fly
     * @return array
     */
    protected function newOptions()
    {
        $options = [];
        $term = str_replace('_', ' ', $this->term);
        foreach ($this->entityService->newEntityTypes() as $type => $class) {
            $options[] = [
                'new' => true,
                'inject' => '[new:' . $type . '|' . $term . ']',
                'fullname' => $term,
                'type' => __('entities.new.' . $type),
                'text' => $term,
                'name' => $term,
            ];
        }

        return $options;
    }
}
