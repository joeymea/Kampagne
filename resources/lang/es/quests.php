<?php

return [
    'create'        => [
        'success'   => 'Misión ":name" creada.',
        'title'     => 'Nueva misión',
    ],
    'destroy'       => [
        'success'   => 'Misión ":name" eliminada.',
    ],
    'edit'          => [
        'success'   => 'Misión ":name" actualizada.',
        'title'     => 'Editar misión :name',
    ],
    'elements'      => [
        'create'    => [
            'success'   => 'Se ha añadido la entidad :entity a la misión.',
            'title'     => 'Nuevo elemento para :name',
        ],
        'destroy'   => [
            'success'   => 'Se ha quitado :entidad de la misión.',
        ],
        'edit'      => [
            'success'   => 'Se ha actualizado :entity en la misión.',
            'title'     => 'Actualizar elemento de la misión :name',
        ],
        'fields'    => [
            'description'       => 'Descripción',
            'entity_or_name'    => 'Selecciona una entidad de la campaña o asigna un nombre a este elemento.',
            'name'              => 'Nombre',
            'quest'             => 'Misión',
        ],
        'title'     => 'Elementos de la misión :name',
    ],
    'fields'        => [
        'character'     => 'Instigador',
        'copy_elements' => 'Copiar elementos vinculados a la misión',
        'date'          => 'Fecha',
        'description'   => 'Descripción',
        'image'         => 'Imagen',
        'is_completed'  => 'Completada',
        'name'          => 'Nombre',
        'quest'         => 'Misión superior',
        'quests'        => 'Submisiones',
        'role'          => 'Rol',
        'type'          => 'Tipo',
    ],
    'helpers'       => [
        'is_completed'      => 'Selecciona esto si la misión ya se ha completado.',
        'nested_parent'     => 'Mostrando las misiones de :parent.',
        'nested_without'    => 'Mostrando todas las misiones sin ningún superior. Haz clic sobre una fila para mostrar sus descendientes.',
    ],
    'hints'         => [
        'quests'    => 'Se puede crear una red de misiones entrelazadas usando el campo Misión Superior.',
    ],
    'index'         => [
        'add'       => 'Nueva misión',
        'header'    => 'Misiones de :name',
        'title'     => 'Misiones',
    ],
    'placeholders'  => [
        'date'  => 'Fecha real de la misión',
        'name'  => 'Nombre de la misión',
        'quest' => 'Misión superior',
        'role'  => 'El papel que juega la entidad en la misión',
        'type'  => 'Historia Principal, Arco de Personaje, Misión Secundaria...',
    ],
    'show'          => [
        'actions'   => [
            'add_element'   => 'Añadir elemento',
        ],
        'tabs'      => [
            'elements'  => 'Elementos',
        ],
        'title'     => 'Misión :name',
    ],
];
