<?php

return [
    'actions'       => [
        'follow'    => 'עקוב',
        'unfollow'  => 'הפסק לעקוב',
    ],
    'campaigns'     => [
        'tabs'  => [
            'modules'   => ':count רכיבים',
            'roles'     => ':count תפקידים',
            'users'     => ':count משתמשים',
        ],
    ],
    'helpers'       => [
        'follow'    => 'מעקב אחר מערכה יגרום לה להופיע ברשימת המערכות (פינה ימנית-עליונה) מתחת למערכות שלך',
        'setup'     => 'הגדר את מסך הבית של המערכה',
    ],
    'notifications' => [
        'modal' => [
            'confirm'   => 'התקבל',
            'title'     => 'התראה חשובה',
        ],
    ],
    'recent'        => [
        'title' => ':name שנערכו לאחרונה',
    ],
    'settings'      => [
        'title' => 'הגדרות מסך בית',
    ],
    'setup'         => [
        'actions'   => [
            'add'               => 'הוסף יישומון',
            'back_to_dashboard' => 'חזור למסך בית',
            'edit'              => 'ערוך יישומון',
        ],
        'title'     => 'הגדרות מסך בית למערכה',
        'widgets'   => [
            'calendar'  => 'לוח שנה',
            'preview'   => 'הצצה לאובייקט',
            'recent'    => 'עריכות אחרונות',
        ],
    ],
    'title'         => 'בית',
    'widgets'       => [
        'calendar'  => [
            'actions'           => [
                'next'      => 'שנה תאריך ליום הבא',
                'previous'  => 'שנה תאריך ליום הקודם',
            ],
            'events_today'      => 'היום',
            'previous_events'   => 'אירועים אחרונים',
            'upcoming_events'   => 'אירועים קרובים',
        ],
        'create'    => [
            'success'   => 'היישומון הוסף למסך הבית',
        ],
        'delete'    => [
            'success'   => 'היישומון הוסר ממסך הבית',
        ],
        'fields'    => [
            'width' => 'גודל',
        ],
        'recent'    => [
            'full'      => 'מלא',
            'help'      => 'הצג רק את האובייקט האחרון שנערך, אך הצג הצצה שלמה לתוכן שלו',
            'helpers'   => [
                'full'  => 'הצג את כל תוכן האובייקט כברירת מחדל במקום רק הצצה',
            ],
            'singular'  => 'בודד',
            'title'     => 'עריכות אחרונות',
        ],
        'update'    => [
            'success'   => 'היישומון נערך',
        ],
        'widths'    => [
            '0' => 'אוטומטי',
            '12'=> 'מלא',
            '4' => 'קטן',
            '6' => 'חצי',
        ],
    ],
];
