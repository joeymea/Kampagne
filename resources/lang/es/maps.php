<?php

return [
    'actions'       => [
        'back'      => 'Volver a :name',
        'edit'      => 'Editar mapa',
        'explore'   => 'Explorar',
    ],
    'create'        => [
        'success'   => 'Mapa ":name" creado.',
        'title'     => 'Nuevo mapa',
    ],
    'destroy'       => [
        'success'   => 'Mapa ":nombre" eliminado.',
    ],
    'edit'          => [
        'success'   => 'Mapa ":name" actualizado.',
        'title'     => 'Editar mapa :name',
    ],
    'errors'        => [
        'dashboard' => [
            'missing'   => 'Este mapa necesita una imagen para que se pueda mostrar en el tablero.',
        ],
        'explore'   => [
            'missing'   => 'Por favor, añade una imagen al mapa para poder explorarlo.',
        ],
    ],
    'fields'        => [
        'center_marker'     => 'Marcador',
        'center_x'          => 'Posicionamiento (longitud) por defecto',
        'center_y'          => 'Posicionamiento (latitud) por defecto',
        'centering'         => 'Centrar',
        'distance_measure'  => 'Medir distancia',
        'distance_name'     => 'Unidad de distancia',
        'grid'              => 'Cuadrícula',
        'initial_zoom'      => 'Zoom inicial',
        'is_real'           => 'Usar OpenStreetMaps',
        'map'               => 'Mapa superior',
        'maps'              => 'Mapas',
        'max_zoom'          => 'Zoom máximo',
        'min_zoom'          => 'Zoom mínimo',
        'name'              => 'Nombre',
        'tabs'              => [
            'coordinates'   => 'Coordenadas',
            'marker'        => 'Marcador',
        ],
        'type'              => 'Tipo',
    ],
    'helpers'       => [
        'center'            => 'Cambia estos valores para controlar en qué área está focalizado el mapa. Si lo dejas en blanco, se mostrará el centro del mapa por defecto.',
        'centering'         => 'Si un marcador está centrado, tendrá prioridad sobre las coordenadas por defecto.',
        'descendants'       => 'Esta lista contiene todos los mapas descendientes de este, y no solo los que están directamente debajo.',
        'distance_measure'  => 'Al darle al mapa una medida de distancia, se habilitará la herramienta de medidas en el modo de exploración.',
        'grid'              => 'Define un tamaño para la cuadrícula que se mostrará en el modo de exploración.',
        'initial_zoom'      => 'El nivel inicial de zoom en el que se carga el mapa. El valor por defecto es :default, mientras que el valor máximo permitido es :max, y el mínimo, :min.',
        'is_real'           => 'Selecciona esta opción si quieres usar un mapa del mundo real en lugar de la imagen. Esta opción deshabilita las capas.',
        'max_zoom'          => 'El máximo que se puede acercar un mapa. El valor por defecto es :default, mientras que el valor máximo permitido es :max.',
        'min_zoom'          => 'El máximo que se puede alejar un mapa. El valor por defecto es :default, mientras que el valor máximo permitido es :min.',
        'missing_image'     => 'Guarda el mapa con una imagen antes de añadir capas y marcadores.',
        'nested_parent'     => 'Mostrando mapas de :parent.',
        'nested_without'    => 'Mostrando todos los mapas sin ningún superior. Haz clic sobre una fila para mostrar sus descendientes.',
    ],
    'index'         => [
        'add'   => 'Nuevo mapa',
        'title' => 'Mapas',
    ],
    'maps'          => [
        'title' => 'Mapas de :name',
    ],
    'panels'        => [
        'groups'    => 'Grupos',
        'layers'    => 'Capas',
        'markers'   => 'Marcadores',
        'settings'  => 'Configuración',
    ],
    'placeholders'  => [
        'center_marker'     => 'Dejar en blanco para cargar el mapa en el centro',
        'center_x'          => 'Dejar en blanco para cargar el mapa en el centro',
        'center_y'          => 'Dejar en blanco para cargar el mapa en el centro',
        'distance_measure'  => 'Unidades por píxel',
        'distance_name'     => 'Nombre de la unidad de distancia (kilómetro, milla...)',
        'grid'              => 'Distancia en píxeles entre los elementos de la cuadrícula. Déjalo en blanco para esconder la cuadrícula.',
        'name'              => 'Nombre del mapa',
        'type'              => 'Mazmorra, ciudad, galaxia...',
    ],
    'show'          => [
        'tabs'  => [
            'maps'  => 'Mapas',
        ],
        'title' => 'Mapa :name',
    ],
];
