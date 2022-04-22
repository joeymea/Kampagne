<?php

return [
    'campaign'          => [
        'application'           => [
            'approved'  => 'Zatwierdzono twoje zgłoszenie do kampanii :campaign.',
            'new'       => 'Nowe zgłoszenie do udziału w kampanii :campaign.',
            'rejected'  => 'Odrzucono twoje zgłoszenie do kampanii :campaign. Oto powód: :reason',
        ],
        'asset_export'          => 'Można pobrać wyeksportowane pliki kampanii. Odnośnik będzie dostępny przez :time minut.',
        'asset_export_error'    => 'Podczas eksportowania składników kampanii wystąpił błąd. To się zdarza, jeżeli kampania jest bardzo duża.',
        'boost'                 => [
            'add'           => 'Kampania :campaign została doładowana przez :user.',
            'remove'        => ':user nie doładowuje już kampanii :campaign.',
            'superboost'    => 'Kampania :campaign została turbodoładowana przez :user.',
        ],
        'deleted'               => 'Usunięto kampanię :campaign',
        'export'                => 'Można pobrać wyeksportowaną kampanię. Odnośnik będzie dostępny przez :time minut.',
        'export_error'          => 'Podczas eksportowania plików kampanii wystąpił błąd. Jeżeli będzie się powtarzał, skontaktuj się z nami. To się zdarza w dużych kampaniach posiadających duże obrazy.',
        'join'                  => ':user dołącza do kampanii :campaign.',
        'leave'                 => ':user opuszcza do kampanię :campaign.',
        'plugin'                => [
            'deleted'   => 'Wtyczka :plugin została usunięta z targowiska, więc usunięto ją również z kampanii :campaign.',
        ],
        'role'                  => [
            'add'       => 'Nadano ci rolę :role w kampanii :campaign.',
            'remove'    => 'Odebrano ci rolę :role w kampanii :campaign.',
        ],
        'troubleshooting'       => [
            'joined'    => ':user z zespołu Kanki dołączył do kampanii :campaign',
        ],
    ],
    'clear'             => [
        'action'    => 'Usuń wszystkie',
        'confirm'   => 'Czy na pewno chcesz usunąć wszystkie powiadomienia? Tego działania nie można cofnąć.',
        'success'   => 'Usunięto powiadomienia',
    ],
    'header'            => 'Masz :count powiadomień.',
    'index'             => [
        'title' => 'Powiadommienia',
    ],
    'no_notifications'  => 'Nie masz powiadomień',
    'subscriptions'     => [
        'charge_fail'   => 'Wystąpił problem w czasie przetwarzania płatności. Odczekaj chwilę i spróbuj jeszcze raz. Jeżeli nic się nie zmieni, skontaktuj się z nami.',
        'deleted'       => 'Po zbyt wielu nieudanych próbach obciążenia twojej karty skasowaliśmy twoją subskrypcję Kanki. Wejdź do ustawień subskrypcji i uaktualnij metodę płatności.',
        'ended'         => 'Twoja subskrypcja została zakończona. Usunięto doładowania kampanii i kanał na Discordzie. Do zobaczenia niedługo!',
        'failed'        => 'Nie można pobrać płatności. Uaktualnij ustawienia Metody Płatności.',
        'started'       => 'Subskrybujesz od teraz Kankę.',
    ],
    'unread'            => 'Nowe powiadomienie',
];
