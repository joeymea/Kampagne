<?php

return [
    'actions'       => [
        'follow'    => 'Follow',
        'join'      => 'Join',
        'unfollow'  => 'Stop following',
    ],
    'campaigns'     => [
        'tabs'  => [
            'modules'   => ':count Modules',
            'roles'     => ':count Roles',
            'users'     => ':count Users',
        ],
    ],
    'dashboards'    => [
        'actions'       => [
            'edit'      => 'Edit name & permissions',
            'new'       => 'New Dashboard',
            'switch'    => 'Switch to dashboard',
        ],
        'boosted'       => ':boosted_campaigns can create custom dashboards for each of the campaign roles.',
        'create'        => [
            'success'   => 'New campaign dashboard :name created.',
            'title'     => 'New Campaign Dashboard',
        ],
        'custom'        => [
            'text'  => 'You are currently editing the :name dashboard of the campaign.',
        ],
        'default'       => [
            'text'  => 'You are currently editing the default dashboard of the campaign.',
            'title' => 'Default Dashboard',
        ],
        'delete'        => [
            'success'   => 'Dashboard :name removed.',
        ],
        'fields'        => [
            'copy_widgets'  => 'Copy widgets',
            'name'          => 'Dashboard name',
            'visibility'    => 'Visibility',
        ],
        'helpers'       => [
            'copy_widgets'  => 'Duplicate the widgets from the :name dashboard into this new one.',
        ],
        'placeholders'  => [
            'name'  => 'Name of the dashboard',
        ],
        'update'        => [
            'success'   => 'Campaign dashboard :name updated.',
            'title'     => 'Update campaign dashboard :name',
        ],
        'visibility'    => [
            'default'   => 'Default',
            'none'      => 'None',
            'visible'   => 'Visible',
        ],
    ],
    'helpers'       => [
        'follow'    => 'Following a campaign will make it appear in the campaign switcher (top-left) below your campaigns.',
        'join'      => 'This campaign is open to new members. Click to apply to join it.',
        'setup'     => 'Setup your campaign\'s dashboard.',
    ],
    'notifications' => [
        'modal' => [
            'confirm'   => 'Got it',
            'title'     => 'Important Notification',
        ],
    ],
    'recent'        => [
        'title' => 'Entity list :name',
    ],
    'settings'      => [
        'title' => 'Dashboard Settings',
    ],
    'setup'         => [
        'actions'   => [
            'add'               => 'Add a widget',
            'back_to_dashboard' => 'Back to dashboard',
            'edit'              => 'Edit a widget',
        ],
        'title'     => 'Campaign Dashboard Setup',
        'tutorial'  => [
            'blog'  => 'our tutorial',
            'text'  => 'Need help setting up your campaign dashboard? Read :blog for some help and inspiration.',
        ],
        'widgets'   => [
            'calendar'      => 'Calendar',
            'campaign'      => 'Campaign header',
            'header'        => 'Text header',
            'preview'       => 'Entity preview',
            'random'        => 'Random entity',
            'recent'        => 'Entity list',
            'unmentioned'   => 'Unmentioned entities list',
        ],
    ],
    'title'         => 'Dashboard',
    'widgets'       => [
        'actions'                   => [
            'advanced-options'  => 'Advanced options',
            'delete-confirm'    => 'this widget',
        ],
        'advanced_options_boosted'  => ':boosted_campaigns have advanced options like showing members of a family or the entity\'s attributes on the dashboard.',
        'calendar'                  => [
            'actions'           => [
                'next'      => 'Change date to next day',
                'previous'  => 'Change date to previous day',
            ],
            'events_today'      => 'Today',
            'previous_events'   => 'Previous',
            'upcoming_events'   => 'Upcoming',
        ],
        'campaign'                  => [
            'helper'    => 'This widget displays the campaign header. This widget is always shown on the default dashboard.',
        ],
        'create'                    => [
            'success'   => 'Widget added to the dashboard.',
        ],
        'delete'                    => [
            'success'   => 'Widget removed from the dashboard.',
        ],
        'fields'                    => [
            'class'             => 'CSS class',
            'dashboard'         => 'Dashboard',
            'name'              => 'Custom widget name',
            'optional-entity'   => 'Link to entity',
            'order'             => 'Ordering',
            'text'              => 'Text',
            'width'             => 'Width',
        ],
        'helpers'                   => [
            'class' => 'Define a custom css class added to the widget.',
        ],
        'orders'                    => [
            'name_asc'  => 'Name ascending',
            'name_desc' => 'Name descending',
            'recent'    => 'Recently modified',
        ],
        'random'                    => [
            'helpers'   => [
                'name'  => 'You can reference the random entity\'s name with {name}',
            ],
        ],
        'recent'                    => [
            'advanced_filter'   => 'Advanced filter',
            'advanced_filters'  => [
                'mentionless'   => 'Mentionless (entities that don\'t mention other entities)',
                'unmentioned'   => 'Unmentioned (entities that aren\'t mentioned by other entities)',
            ],
            'entity-header'     => 'Use entity header as image',
            'filters'           => 'Filters',
            'full'              => 'Display full entry',
            'help'              => 'Only show the first entity as a preview instead of a list.',
            'helpers'           => [
                'entity-header'     => 'If your entity has an entity header (boosted campaign feature), set this widget to use that image instead of the entity\'s image.',
                'filters'           => 'You can filter the kind of entities that show up. Learn how to use this field by visiting the :link helper page.',
                'full'              => 'Display the whole entity\'s entry by default instead of a preview.',
                'show_attributes'   => 'Show the entity\'s pinned attributes below the entry.',
                'show_members'      => 'If the entity is a family or organisation, show its members below the entry.',
                'show_relations'    => 'Show the entity\'s pinned relations below the entry.',
            ],
            'show_attributes'   => 'Show pinned attributes',
            'show_members'      => 'Show members',
            'show_relations'    => 'Show pinned relations',
            'singular'          => 'Preview',
            'tags'              => 'Filter the list of entities on specified tags.',
            'title'             => 'Entity list',
        ],
        'tabs'                      => [
            'advanced'  => 'Advanced',
            'setup'     => 'Setup',
        ],
        'unmentioned'               => [
            'title' => 'Unmentioned entities',
        ],
        'update'                    => [
            'success'   => 'Widget modified.',
        ],
        'widths'                    => [
            '0' => 'Auto',
            '12'=> 'Full (100%)',
            '3' => 'Tiny (25%)',
            '4' => 'Small (33%)',
            '6' => 'Half (50%)',
            '8' => 'Wide (66%)',
            '9' => 'Large (75%)',
        ],
    ],
];
