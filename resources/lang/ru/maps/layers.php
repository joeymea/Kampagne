<?php

return [
    'actions'       => [
        'add'   => 'Добавить новый слой',
    ],
    'base'          => 'Основной слой',
    'create'        => [
        'success'   => 'Слой ":name" создан.',
        'title'     => 'Новый слой',
    ],
    'delete'        => [
        'success'   => 'Слой ":name" удален.',
    ],
    'edit'          => [
        'success'   => 'Слой ":name" обновлен.',
        'title'     => 'Редактирование слоя :name',
    ],
    'fields'        => [
        'position'  => 'Позиция',
        'type'      => 'Тип слоя',
    ],
    'helper'        => [
        'amount'            => 'Вы можете добавить не более :amount слоев, меняющих фоновое изображение под метками.',
        'boosted_campaign'  => ':boosted позволяют создать до :amount слоев.',
        'is_real'           => 'Слои не доступны при использовании OpenStreetMaps.',
    ],
    'placeholders'  => [
        'name'      => 'Подземный этаж, уровень 2, затонувший корабль',
        'position'  => 'Определяет порядок отображения слоев.',
    ],
    'short_types'   => [
        'overlay'       => 'Перекрывающий (скрытый)',
        'overlay_shown' => 'Перекрывающий (видимый)',
        'standard'      => 'Обычный',
    ],
    'types'         => [
        'overlay'       => 'Перекрывающий, скрытый по умолчанию',
        'overlay_shown' => 'Перекрывающий, видимый по умолчанию',
        'standard'      => 'Обычный (самостоятельный)',
    ],
];
