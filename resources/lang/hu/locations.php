<?php

return [
    'characters'    => [
        'title' => ':name helyszín karakterei',
    ],
    'create'        => [
        'success'   => ':name helyszínt létrehoztuk.',
        'title'     => 'Új helyszín',
    ],
    'destroy'       => [
        'success'   => ':name helyszínt töröltük.',
    ],
    'edit'          => [
        'success'   => ':name helyszínt frissítettük.',
        'title'     => ':name helyszín szerkesztése',
    ],
    'events'        => [
        'title' => ':name helyszín eseményei',
    ],
    'families'      => [
        'title' => ':name helyszínhez kapcsolódó családok',
    ],
    'fields'        => [
        'characters'        => 'Karakterek',
        'image'             => 'Kép',
        'is_map_private'    => 'Privát Térkép',
        'location'          => 'Szülő Helyszín',
        'locations'         => 'Helyszínek',
        'map'               => 'Térkép',
        'name'              => 'Név',
        'relation'          => 'Kapcsolat',
        'type'              => 'Típus',
    ],
    'helpers'       => [
        'characters'        => 'Minden, a helyszínen és annak alhelyszínein, vagy közvetlenül csak a helyszínen tartózkodó karakter listázása.',
        'descendants'       => 'Ez a lista a helyszín összes leszármazott helyszínét tartalmazza, nemcsak a közvetlen alhelyszíneit.',
        'families'          => 'A helyszínek befolyásos családok otthonául szolgálhatnak.',
        'map'               => 'Egy térképet hozzárendelve egy helyszínhez lehetőséged nyílik Térkép pontok elhelyezésére rajta, melyek más-más entitásokra hivatkozhatnak a kampányodban.',
        'map_deprecated_2'  => 'A Térképek már saját modullal rendelkeznek! A már meglévő, régi helyszín térképek továbbra is szerkeszthetőek maradnak, de minden új térkép már az Új Térkép modulba fognak kerülni.',
        'nested_parent'     => ':parent helyszíneinek mutatása',
        'nested_without'    => 'Minden olyan helyszín mutatása, amelynek nincs szülője. Klikkelj egy sorra, hogy lásd a gyermekhelyszíneit.',
        'organisations'     => 'Megtekintheted az összes Szervezetet ezen a helyszínen, és ezek leszármazott helyszíneit, vagy csak azokat, amelyek közvetlenül itt találhatóak.',
    ],
    'hints'         => [
        'is_map_private'    => 'Egy privát térkép csak a kampány "Admin" szerepű tagjai számára láthatóak.',
    ],
    'index'         => [
        'actions'   => [
            'explore_view'  => 'Hierarchikus nézet',
        ],
        'add'       => 'Új helyszín',
        'header'    => ':name helyszínei',
        'title'     => 'Helyszínek',
    ],
    'items'         => [
        'title' => ':name helyszín tárgyai',
    ],
    'journals'      => [
        'title' => ':name helyszín naplóbejegyzései',
    ],
    'locations'     => [
        'title' => ':name helyszín alhelyszínei',
    ],
    'map'           => [
        'actions'   => [
            'admin_mode'        => 'Szerkesztési mód bekapcsolása',
            'big'               => 'Teljes nézet',
            'confirm_delete'    => 'Biztos vagy benne, hogy törölni szeretnéd ezt a térkép pontot?',
            'download'          => 'Letöltés',
            'points'            => 'Pontok szerkesztése',
            'toggle_hide'       => 'Pontok elrejtése',
            'toggle_show'       => 'Pontok megjelenítése',
            'view_mode'         => 'Vissza a megtekintési nézetbe',
            'zoom_in'           => 'Közelít',
            'zoom_out'          => 'Távolít',
            'zoom_reset'        => 'Alapértelmezett nagyítás',
        ],
        'helper'    => 'Kattints a térképre hogy egy új pontot adj a helyszínhez, vagy kattints egy létező pontra annak megváltoztatásához vagy törléséhez.',
        'helpers'   => [
            'admin' => 'Aktiváld, hogy bárhova a térképre kattintva létrehozhass új pontokat, kattintva a pontokra szerkeszd őket vagy mozgasd.',
            'info'  => 'További információk a térképekről.',
            'label' => 'Ez a pont egy címke, sem több, sem kevesebb.',
            'view'  => 'Kattints bármelyik pontra annak részleteiért. Ctrl+egérgörgővel közelítheted vagy távolíthatod a térképet.',
        ],
        'legend'    => 'Jelmagyarázat',
        'modal'     => [
            'submit'    => 'Hozzáad',
            'title'     => 'Új pont célpontja',
        ],
        'no_map'    => 'Szerkesztéskor feltölthetsz egy térképet ehhez a helyszínhez, mely itt fog megjelenni.',
        'points'    => [
            'empty_label'   => 'Nevesítetlen Pont.',
            'fields'        => [
                'axis_x'    => 'X tengely',
                'axis_y'    => 'Y tengely',
                'colour'    => 'Háttér színe',
                'icon'      => 'Ikon',
                'name'      => 'Felirat',
                'shape'     => 'Alakzat',
                'size'      => 'Méret',
            ],
            'helpers'       => [
                'location_or_name'  => 'Egy térképi pont mutathat egy létező helyszínre, vagy lehet egyszerűen csak egy felirat is.',
            ],
            'icons'         => [
                'anchor'        => 'Horgony',
                'anvil'         => 'Üllő',
                'apple'         => 'Alma',
                'aura'          => 'Aura',
                'axe'           => 'Balta',
                'beer'          => 'Sör',
                'biohazard'     => 'Biohazard',
                'book'          => 'Könyv',
                'bridge'        => 'Híd',
                'campfire'      => 'Tábortűz',
                'candle'        => 'Gyertya',
                'capitol'       => 'Törvényház',
                'castle-emblem' => 'Kastély',
                'cat'           => 'Macska',
                'cheese'        => 'Sajt',
                'cog'           => 'Fogaskerék',
                'crown'         => 'Korona',
                'dead-tree'     => 'Halott fa',
                'diamond'       => 'Gyémánt',
                'dragon'        => 'Sárkány',
                'emerald'       => 'Smaragd',
                'entity'        => 'Célentitás képe',
                'fire'          => 'Tűz',
                'flask'         => 'Palack',
                'flower'        => 'Virág',
                'horseshoe'     => 'Patkó',
                'hourglass'     => 'Homokóra',
                'hydra'         => 'Hidra',
                'kaleidoscope'  => 'Kaleidoszkóp',
                'key'           => 'Kulcs',
                'lever'         => 'Kapcsoló',
                'meat'          => 'Hús',
                'octopus'       => 'Polip',
                'palm-tree'     => 'Pálma',
                'pin'           => 'Gombostű',
                'pine-tree'     => 'Fenyőfa',
                'player'        => 'Karakter',
                'potion'        => 'Üvegcse',
                'reactor'       => 'Reaktor',
                'repair'        => 'Szerelő',
                'sheep'         => 'Birka',
                'shield'        => 'Pajzs',
                'skull'         => 'Koponya',
                'snake'         => 'Kígyó',
                'spades-card'   => 'Pikk kártya',
                'sprout'        => 'Növényi hajtás',
                'sun'           => 'Nap',
                'tentacle'      => 'Csáp',
                'toast'         => 'Pirítós',
                'tombstone'     => 'Sírkő',
                'torch'         => 'Fáklya',
                'tower'         => 'Torony',
                'vase'          => 'Váza',
                'water-drop'    => 'Víz',
                'wooden-sign'   => 'Küldetés',
                'wrench'        => 'Villáskulcs',
            ],
            'modal'         => 'Térképi pont létrehozása vagy szerkesztése',
            'placeholders'  => [
                'axis_x'    => 'Bal pozíció',
                'axis_y'    => 'Felső pozíció',
                'name'      => 'A pont felirata, amennyiben nincs helyszín megadva.',
            ],
            'return'        => 'Vissza ide: :name',
            'shapes'        => [
                'circle'    => 'Kör',
                'custom'    => 'Egyedi',
                'square'    => 'Négyzet',
            ],
            'sizes'         => [
                'custom'    => 'Egyéni',
                'huge'      => 'Hatalmas',
                'large'     => 'Nagy',
                'small'     => 'Kicsi',
                'standard'  => 'Közepes',
                'tiny'      => 'Apró',
            ],
            'success'       => [
                'create'    => 'A térképi pontot létrehoztuk',
                'delete'    => 'A térképi pontot eltávolítottuk',
                'update'    => 'A térképi pontot frissítettük',
            ],
            'title'         => ':name helyszín térképi pontjai',
        ],
        'success'   => 'A térképi pontokat elmentettük.',
    ],
    'maps'          => [
        'title' => 'Helyszín :name Térképei',
    ],
    'organisations' => [
        'title' => ':name helyszín szervezetei',
    ],
    'panels'        => [
        'map'   => 'Térkép',
    ],
    'placeholders'  => [
        'location'  => 'Válassz ki egy szülő helyszínt!',
        'name'      => 'A helyszín neve',
        'type'      => 'Város, királyság, rom, táncklub',
    ],
    'show'          => [
        'tabs'  => [
            'characters'    => 'Karakterek',
            'events'        => 'Események',
            'families'      => 'Családok',
            'items'         => 'Tárgyak',
            'journals'      => 'Naplóbejegyzések',
            'locations'     => 'Helyszínek',
            'map'           => 'Térkép',
            'maps'          => 'Térképek',
            'organisations' => 'Szervezetek',
            'quests'        => 'Küldetések',
        ],
        'title' => ':name helyszín',
    ],
];
