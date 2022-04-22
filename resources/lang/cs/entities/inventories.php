<?php

return [
    'actions'       => [
        'add'   => 'Přidat předmět',
    ],
    'create'        => [
        'success'   => 'Předmět :item přidán objektu :entity.',
        'title'     => 'Přidat předmět objektu :name',
    ],
    'destroy'       => [
        'success'   => 'Předmět :item odstraněn z objektu :entity',
    ],
    'fields'        => [
        'amount'            => 'Množství',
        'copy_entity_entry' => 'Použít záznam předmětu',
        'description'       => 'Popis',
        'is_equipped'       => 'Nasazeno',
        'name'              => 'Název',
        'position'          => 'Umístění',
        'qty'               => 'Množ.',
    ],
    'helpers'       => [
        'copy_entity_entry' => 'Zobrazit záznam předmětu namísto vlastního popisu.',
    ],
    'placeholders'  => [
        'amount'        => 'Libovolné množství',
        'description'   => 'Použité, Poškozené, Vyladěné',
        'name'          => 'Vyžadováno, pokud není vybrán žádný předmět',
        'position'      => 'Připravené; v batohu; ve skladu; v bance',
    ],
    'show'          => [
        'helper'    => 'Objektům lze přidávat předměty a vytvářet tak jejich inventář',
        'title'     => 'Inventář objektu :name',
        'unsorted'  => 'Neseřazené',
    ],
    'update'        => [
        'success'   => 'Předmět :item aktualizován u objektu :entity.',
        'title'     => 'Aktualizovat předmět objektu :name',
    ],
];
