<?php

return [
    'create'        => [
        'description'   => 'Eine neue Notiz erstellen',
        'success'       => 'Notiz \':name\' erstellt.',
        'title'         => 'Erstelle eine neue Notiz',
    ],
    'destroy'       => [
        'success'   => 'Notiz \':name\' entfernt.',
    ],
    'edit'          => [
        'success'   => 'Notiz \':name\' aktualisiert.',
        'title'     => 'Bearbeite Notiz :name',
    ],
    'fields'        => [
        'description'   => 'Beschreibung',
        'image'         => 'Bild',
        'is_pinned'     => 'Angepinnt',
        'name'          => 'Name',
        'type'          => 'Typ',
    ],
    'hints'         => [
        'is_pinned' => 'Bis zu 3 Notizen können angepinnt werden und werden dann auf dem Dashboard angezeigt.',
    ],
    'index'         => [
        'add'           => 'Neue Notiz',
        'description'   => 'Verwalte die Notizen von :name.',
        'header'        => 'Notizen von :name',
        'title'         => 'Notizen',
    ],
    'placeholders'  => [
        'name'  => 'Name der Notiz',
        'type'  => 'Religion, Rasse, Politisches System',
    ],
    'show'          => [
        'description'   => 'Eine detaillierte Ansicht einer Notiz',
        'tabs'          => [
            'description'   => 'Beschreibung',
        ],
        'title'         => 'Notiz :name',
    ],
];
