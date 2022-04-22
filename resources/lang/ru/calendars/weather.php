<?php

return [
    'actions'       => [
        'delete-confirm'    => 'эту погоду',
    ],
    'create'        => [
        'success'   => 'Погода добавлена.',
        'title'     => 'Новое погодное явление',
    ],
    'destroy'       => [
        'success'   => 'Погода удалена.',
    ],
    'edit'          => [
        'success'   => 'Погода обновлена.',
        'title'     => 'Обновление погоды',
    ],
    'fields'        => [
        'effect'        => 'Погодное явление',
        'name'          => 'Название',
        'precipitation' => 'Осадки',
        'temperature'   => 'Температура',
        'weather'       => 'Погода',
        'wind'          => 'Ветер',
    ],
    'options'       => [
        'weather'   => [
            'bolt'                  => 'Гроза',
            'cloud'                 => 'Облака',
            'cloud-rain'            => 'Дождь',
            'cloud-showers-heavy'   => 'Ливень',
            'cloud-sun'             => 'Облака и солнце',
            'cloud-sun-rain'        => 'Облака, дождь и солнце',
            'meteor'                => 'Метеорит',
            'smog'                  => 'Туман',
            'snowflake'             => 'Снег',
            'sun'                   => 'Солнце',
            'wind'                  => 'Ветер',
        ],
    ],
    'placeholders'  => [
        'effect'        => 'Магическое или природное явление',
        'name'          => 'Необязательно, для особых погодных явлений',
        'precipitation' => 'Количество осадков',
        'temperature'   => 'Дневной максимум и минимум',
        'wind'          => 'Скорость ветра',
    ],
];
