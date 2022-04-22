<?php

namespace App\Datagrids\Sorters;

/**
 * Class FamilyFamilySorter
 * @package App\Datagrids\Sorters
 */
class CalendarEventSorter extends DatagridSorter
{
    public $default = 'entity.name';


    /**
     * @var array
     */
    public $options = [
        'entity.name' => 'crud.fields.entity',
        'entity.type' => 'crud.fields.entity_type',
        'date' => 'events.fields.date',
        'length' => 'calendars.fields.length',
        'today' => 'calendars.sorters.today',
    ];

    /**
     * @var array
     */
    public $orderMultiple = [
        'date' => ['year', 'month', 'day']
    ];
}
