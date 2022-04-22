<?php

return [
    'create'        => [
        'success'   => '\':name\' eseményt létrehoztuk',
        'title'     => 'Új esemény',
    ],
    'destroy'       => [
        'success'   => '\':name\' eseményt töröltük.',
    ],
    'edit'          => [
        'success'   => '\':name\' eseményt frissítettük.',
        'title'     => ':name esemény szerkesztése',
    ],
    'events'        => [
        'title' => ':name esemény',
    ],
    'fields'        => [
        'date'      => 'Dátum',
        'event'     => 'Szülő esemény',
        'events'    => 'Események',
        'image'     => 'Kép',
        'location'  => 'Helyszín',
        'name'      => 'Megnevezés',
        'type'      => 'Típus',
    ],
    'helpers'       => [
        'date'          => 'Ebbe a mezőbe bármit beírhatsz, és nem kapcsolódik a kampány naptárához. Hogy az eseményt összerendeld egy naptárral, magán a naptáron add hozzá az eseményt, vagy ennek az eseménynek az Emlékeztetők fülén.',
        'nested_parent' => ':parent eseményeinek megmutatása',
        'nested_without'=> 'Minden eseményt megmutat, amelyeknek nincs szülőeseménye. Klikkelj egy sorra, hogy meglásd a gyermekeseményeket.',
    ],
    'index'         => [
        'add'       => 'Új esemény',
        'header'    => ':name eseményei',
        'title'     => 'Események',
    ],
    'placeholders'  => [
        'date'      => 'Az eseményed dátuma',
        'location'  => 'Válassz ki egy helyszínt!',
        'name'      => 'Az esemény neve',
        'type'      => 'Szertartás, ünnepség, katasztrófa, csata, születés',
    ],
    'show'          => [
        'title' => ':name esemény',
    ],
    'tabs'          => [
        'calendars' => 'Naptári bejegyzések',
    ],
];
