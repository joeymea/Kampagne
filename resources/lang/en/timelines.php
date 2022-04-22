<?php

return [
    'actions'       => [
        'add_element'   => 'Add to era :era',
        'back'          => 'Back to :name',
        'edit'          => 'Edit timeline',
        'reorder'       => 'Reorder',
        'save_order'    => 'Save new order',
    ],
    'create'        => [
        'success'   => 'Timeline :name created.',
        'title'     => 'New Timeline',
    ],
    'destroy'       => [
        'success'   => 'Timeline :name removed.',
    ],
    'edit'          => [
        'success'   => 'Timeline :name updated.',
        'title'     => 'Edit Timeline :name',
    ],
    'fields'        => [
        'copy_elements' => 'Copy Elements',
        'copy_eras'     => 'Copy Eras',
        'eras'          => 'Eras',
        'name'          => 'Name',
        'reverse_order' => 'Reverse era order',
        'timeline'      => 'Parent Timeline',
        'timelines'     => 'Timelines',
        'type'          => 'Type',
    ],
    'helpers'       => [
        'nested_parent'     => 'Displaying the timelines of :parent.',
        'nested_without'    => 'Displaying all timelines that don\'t have a parent timeline. Click on a row to see the children timelines.',
        'no_era'            => 'This timeline currently doesn\'t have any eras. Eras can be added in the timeline\'s edit screen, after which you can add elements here.',
        'reorder'           => 'Drag and drop elements of the era to reorder them.',
        'reorder_tooltip'   => 'Click to enable manual reordering of elements using drag and drop.',
        'reverse_order'     => 'Enable to display eras in reverse chronological order (older era first)',
    ],
    'index'         => [
        'add'   => 'New Timeline',
        'title' => 'Timelines',
    ],
    'placeholders'  => [
        'name'  => 'Name of the timeline',
        'type'  => 'Primary, World chronicle, Kingdom legacy',
    ],
    'show'          => [
        'tabs'  => [
            'timelines' => 'Timelines',
        ],
        'title' => 'Timeline :name',
    ],
    'timelines'     => [
        'title' => 'Timeline :name Timelines',
    ],
];
