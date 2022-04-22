<?php

return [
    'actions'   => [
        'add'                       => 'Añadir habilidad',
        'import_from_race'          => 'Añadir habilidades de raza',
        'import_from_race_mobile'   => 'Habilidades raciales',
        'reset'                     => 'Restablecer usos de habilidad',
    ],
    'create'    => [
        'success'           => 'Habilidad :ability añadida a :entity.',
        'success_multiple'  => 'Habilidades :abilities añadidas a :entity.',
        'title'             => 'Añadir habilidad a :name',
    ],
    'fields'    => [
        'note'      => 'Nota',
        'position'  => 'Posición',
    ],
    'helpers'   => [
        'note'  => 'Puedes referenciar entidades mediante las menciones avanzadas (por ejemplo, :code) y atributos de la entidad (por ejemplo, :attr) en este campo.',
    ],
    'import'    => [
        'errors'    => [
            'no_race'       => 'El personaje no tiene raza.',
            'not_character' => 'La entidad no es un personaje.',
        ],
        'success'   => '{1} Se han importado :count habilidades.|[2,*] Se han importado :count habilidades.',
    ],
    'show'      => [
        'helper'    => 'Adjunta habilidades a esta entidad. Puedes modificar su visibilidad o eliminarlas más adelante. Las habilidades pertenecientes al mismo grupo se agrupan por tipos.',
        'title'     => 'Habilidades de :name',
    ],
    'update'    => [
        'title' => 'Habilidad de :name',
    ],
];
