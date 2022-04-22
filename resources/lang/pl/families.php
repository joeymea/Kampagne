<?php

return [
    'create'        => [
        'success'   => 'Stworzono rodzinę \':name\'.',
        'title'     => 'Nowa rodzina',
    ],
    'destroy'       => [
        'success'   => 'Usunięto rodzinę \':name\'.',
    ],
    'edit'          => [
        'success'   => 'Zmieniono rodzinę \':name\'.',
        'title'     => 'Edycja rodziny :name',
    ],
    'families'      => [
        'title' => 'Rodziny rodziny :name',
    ],
    'fields'        => [
        'families'  => 'Rodziny pochodne',
        'family'    => 'Rodzina źródłowa',
        'image'     => 'Obraz',
        'location'  => 'Miejsce',
        'members'   => 'Członkowie',
        'name'      => 'Nazwa',
        'relation'  => 'Relacja',
        'type'      => 'Rodzaj',
    ],
    'helpers'       => [
        'descendants'   => 'Na liście znajdują się wszystkie rodziny wywodzące się od tej rodziny, nie tylko bezpośrednio.',
        'nested_parent' => 'Wyświetlono rodziny pochodzące od :parent.',
        'nested_without'=> 'Wyświetlono wszystkie rodziny nie posiadające źródła. Kliknij na rząd, by wyświetlić rodziny pochodne.',
    ],
    'hints'         => [
        'members'   => 'Lista członków rodziny. Aby dodać postać do rodziny, wybierz ją z listy w pozycji "Rodzina" podczas edycji tej postaci.',
    ],
    'index'         => [
        'add'       => 'Nowa rodzina',
        'header'    => 'Rodziny elementu :name',
        'title'     => 'Rodziny',
    ],
    'members'       => [
        'helpers'   => [
            'all_members'       => 'Na liście znajdują się postaci należące do tej rodziny i wszystkich jej rodzin pochodnych.',
            'direct_members'    => 'Większość rodzin posiada członków, którymi słynie. Na poniższej liście znajdują się postaci należące do tej rodziny bezpośrednio.',
        ],
        'title'     => 'Członkowie rodziny :name',
    ],
    'placeholders'  => [
        'location'  => 'Wybierz miejsce',
        'name'      => 'Nazwisko rodowe',
        'type'      => 'Królewska, szlachecka, wymarła',
    ],
    'show'          => [
        'tabs'  => [
            'all_members'   => 'Wszyscy członkowie',
            'families'      => 'Rodziny',
            'members'       => 'Członkowie',
            'relation'      => 'Relacje',
        ],
        'title' => 'Rodzina :name',
    ],
];
