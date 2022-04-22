<?php

return [
    'create'        => [
        'success'   => 'Záznam :name vytvorený.',
        'title'     => 'Nový záznam v denníku',
    ],
    'destroy'       => [
        'success'   => 'Záznam :name vytvorený.',
    ],
    'edit'          => [
        'success'   => 'Záznam :name upravený.',
        'title'     => 'Upraviť záznam :name',
    ],
    'fields'        => [
        'author'    => 'Autor',
        'date'      => 'Dátum',
        'image'     => 'Obrázok',
        'journal'   => 'Nadradený denník',
        'journals'  => 'Podradený denník',
        'name'      => 'Názov',
        'relation'  => 'Prepojenie',
        'type'      => 'Typ',
    ],
    'helpers'       => [
        'journals'      => 'Zobrazí všetky alebo len priamo podradené denníky tohto denníka.',
        'nested_parent' => 'Zobraziť denníky :parent.',
        'nested_without'=> 'Zobraziť všetky denníky, ktoré nemajú nadradený denník. Kliknutím na riadok zobrazíš podradené denníky.',
    ],
    'index'         => [
        'add'       => 'Nový záznam v denníku',
        'header'    => 'Záznamy v denníku objektu :name',
        'title'     => 'Záznamy v denníku',
    ],
    'journals'      => [
        'title' => 'Podradené denníky denníka :name',
    ],
    'placeholders'  => [
        'author'    => 'Kto napísal tento záznam',
        'date'      => 'Reálny dátum tohto záznamu',
        'journal'   => 'Vyber nadradený denník',
        'name'      => 'Názov tohto záznamu',
        'type'      => 'sedenie, one shot, návrh',
    ],
    'show'          => [
        'tabs'  => [
            'journals'  => 'Denníky',
        ],
        'title' => 'Záznam :name',
    ],
];
