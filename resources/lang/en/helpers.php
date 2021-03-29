<?php

return [
    'age'           => [
        'description'   => 'You can link a Character to a calendar of the campaign by viewing a Character and going to the Reminders tab. From there, add a new reminder and set the type to Birth or Death to automatically calculate the character\'s age. If both birth and death are present, both dates will be shown as well as the age at death. If only the birth is set, the date and the current age will be shown. If only the death is set, the date and the years since death will be shown.',
        'title'         => 'Character Age and Death',
    ],
    'attributes'    => [
        'con'           => 'Con',
        'description'   => 'Use attributes to represent values attached to an entity that aren\'t text. You can reference entities in attributes using the advanced mentions syntax :mention. You can also reference other attributes by using the :attribute syntax.',
        'level'         => 'Level',
        'link'          => 'Attribute options',
        'name'          => 'You can reference the entity\'s name with :name. If an attribute exists with that name, the attribute will be used instead.',
        'math'          => 'You can also get creative with some basic math options. For example, :example will multiple the :level and :con attributes of this entity. If you want to round up or down, you can use :floor or :ceil',
        'pinned'        => 'Pinning an attribute using the :icon icon will make it appear in the entitiy\'s menu below its image.',
        'private'       => 'Private attributes using the :icon will make them only visible to members of the campaign\s admin role.',
        'random'        => 'When creating or editing an attribute template, you can set random attributes. This can either be a random value between two numbers separated by :dash, or a random value from a list of values separated by :comma. The value for the attribute is determined when the template is applied to an entity, or when an entity is saved.',
        'random_examples' => 'For example, if you want a number between 1 and 100, use :number. If you want a value from a list of options, use :list.',
        'title'         => 'Attributes',
    ],
    'dice'          => [
        'description'               => 'Generic dice rolling is possible by writting "d20", "4d4+4", "d%" for percentile and "df" for fudge.',
        'description_attributes'    => 'It is also possible to get a character\'s attribute by using the {character.attribute_name} syntax. For example, {character.level}d6+{character.wisdom}.',
        'more'                      => 'More options are available and explained on the dice roller plugin page.',
        'title'                     => 'Dice Rolls',
    ],
    'filters'       => [
        'description'   => 'You can use filters to limit the amount of results shown in lists. Text fields support various options to control in further detail what is filtered out.',
        'empty'         => 'Writing :tag in a field will search for all entities where this field is empty.',
        'ending_with'   => 'By placing an :tag at the end of your text, you can search for every entity with exactly this text in the field.',
        'multiple'      => 'You can combine search options on text fields by writing :syntax. For example :example.',
        'session'       => 'Filters and ordered columns set for an entity list are saved into your session, so as long as you stay connected you don\'t need to re-set them on every page.',
        'starting_with' => 'By placing an :tag before your text, you can search for anything that doesn\'t contain the text in the field.',
        'title'         => 'How to use filters',
    ],
    'link'          => [
        'attributes'        => 'You can reference attributes of the entity by typing :code. This only works for on existing attributes of the entity.',
        'auto_update'       => 'Links to other entities will automatically be updated when the target\'s name or description is changed.',
        'description'       => 'You can easily link to other entities in your campaign using the following shorthands.',
        'formatting'        => [
            'text'  => 'The list of allowed HTML tags and attributes can be seen on our :github.',
            'title' => 'Formatting',
        ],
        'friendly_mentions' => 'Link to other entities by typing :code and the first few characters of an entity to search for it. This will inject :example in the text editor, and render as a link to the entity when viewing said entity.',
        'limitations'       => 'Please note that due to technical limitations, these shorthands don\'t work on android mobile devices, unless using the new Summernote editor. You can change your editor in your Settings > Layout preferences.',
        'mention_helpers'   => 'If your entity name has a space, use :example instead of space. If you want to search for an entity with exactly that name, type in :exact.',
        'mentions'          => 'Link to other entities by typing :code and the first few characters of an entity to search for it. This will inject :example in the text editor. To customise the name of the entity displayed, you can type :example_name. To set the entity\'s subpage, use :example_page. To set the entity\'s tab, use :example_tab.',
        'months'            => 'Type :code to get a list of months from your calendars.',
        'title'             => 'Linking to other entries and shortcuts',
    ],
    'map'           => [
        'description'   => 'Uploading a map to a location will enable the `Map` menu on the Location\'s view page, and a direct link to the map from the campaign\'s locations page. From the map view, users who can edit the location can activate the \'Edit Mode\' which allows them to place Map Points on the map. These can link to an existing entity or be a label, and have various shapes and sizes.',
        'private'       => 'Members in the campaign\'s Admin role can make a map private. This allows users to view a location but for admins to keep the map a secret.',
        'title'         => 'Location Maps',
    ],
    'public'        => 'Watch a tutorial video on Youtube explaining public campaigns.',
    'title'         => 'Helpers',
];
