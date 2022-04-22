<?php

return [
    'actions'       => [
        'back'      => 'Powrót do :name',
        'edit'      => 'Edytuj mapę',
        'explore'   => 'Eksploruj',
    ],
    'create'        => [
        'success'   => 'Stworzono mapę :name.',
        'title'     => 'Nowa mapa',
    ],
    'destroy'       => [
        'success'   => 'Usunięto mapę :name',
    ],
    'edit'          => [
        'success'   => 'Zmieniono mapę :name',
        'title'     => 'Edycja mapy :name',
    ],
    'errors'        => [
        'dashboard' => [
            'missing'   => 'Aby mapa mogła pojawić się na pulpicie, potrzebuje obrazu.',
        ],
        'explore'   => [
            'missing'   => 'Dodaj do tej mapy obraz by móc ją eksplorować.',
        ],
    ],
    'fields'        => [
        'center_marker'     => 'Znacznik',
        'center_x'          => 'Wyjściowa szerokość geograficzna',
        'center_y'          => 'Wyjściowa długość geograficzna',
        'centering'         => 'Wyśrodkowanie',
        'distance_measure'  => 'Miara odległości',
        'distance_name'     => 'Jednostka odległości',
        'grid'              => 'Siatka',
        'initial_zoom'      => 'Wyjściowe powiększenie',
        'is_real'           => 'Użyj OpenStreetMaps',
        'map'               => 'Mapa źrodłowa',
        'maps'              => 'Mapy pochodne',
        'max_zoom'          => 'Maksymalne powiększenie',
        'min_zoom'          => 'Maksymalne oddalenie',
        'name'              => 'Nazwa',
        'tabs'              => [
            'coordinates'   => 'Współrzędne',
            'marker'        => 'Znacznik',
        ],
        'type'              => 'Rodzaj',
    ],
    'helpers'       => [
        'center'            => 'Zmiana tych wartości wpłynie na obszar, na którym domyślnie skupia się mapa. Jeżeli zostawisz je puste, mapa skoncentruje się na środku.',
        'centering'         => 'Środkowanie na znaczniku ma pierwszeństwo wobec domyślnych współrzędnych',
        'descendants'       => 'Na liście znajdują się wszystkie mapy pochodzące od tej, nie tylko bezpośrednio.',
        'distance_measure'  => 'Wyposażając mapę w miary odległości uruchomisz narzędzie odmierzania dystansu w trybie eksploracji.',
        'grid'              => 'Określ wielkość siatki wyświetlanej w trybie eksploracji',
        'initial_zoom'      => 'Powiększenie, w jakim wyświetla się mapa. Domyślna wartość to :default, najwyższa dopuszczalna wartość wynosi :max, a najniższa to :min.',
        'is_real'           => 'Zaznacz tej opcji by używać autentycznych map świata zamiast załączonego obrazu. Jej użycie wyłącza warstwy.',
        'max_zoom'          => 'Większość map można przybliżać. Domyślna wartość przybliżenia to :default, a najwyższa możliwa wynosi :max.',
        'min_zoom'          => 'Większość map można oddalać. Domyślna wartość oddalenia to :default, a najwyższa możliwa wynosi :min.',
        'missing_image'     => 'Zapisz obraz mapy zanim dodasz do niego znaczniki i warstwy.',
        'nested_parent'     => 'Wyświetlono mapy pochodzące od :parent.',
        'nested_without'    => 'Wyświetlono wszystkie mapy nie posiadające źródła. Kliknij na rząd, by wyświetlić mapy pochodne.',
    ],
    'index'         => [
        'add'   => 'Nowa mapa',
        'title' => 'Mapy',
    ],
    'maps'          => [
        'title' => 'Mapy elementu :name',
    ],
    'panels'        => [
        'groups'    => 'Kategorie',
        'layers'    => 'Warstwy',
        'markers'   => 'Znaczniki',
        'settings'  => 'Ustawienia',
    ],
    'placeholders'  => [
        'center_marker'     => 'Zostaw pusty, by mapa wyświetlała się wyśrodkowana w centrum',
        'center_x'          => 'Pozostaw puste, by mapa wyświetlała się skupiona na środku',
        'center_y'          => 'Pozostaw puste, by mapa wyświetlała się skupiona na środku',
        'distance_measure'  => 'Jednostka na piksel',
        'distance_name'     => 'Nazwa miary odległości (kilometr, mila)',
        'grid'              => 'Odległość w pikselach między elementami siatki. Pozostaw puste, by ukryć siatkę.',
        'name'              => 'Nazwa mapy',
        'type'              => 'Loch, miasto, galaktyka',
    ],
    'show'          => [
        'tabs'  => [
            'maps'  => 'Mapy',
        ],
        'title' => 'Mapa :name',
    ],
];
