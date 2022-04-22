<?php

return [
    'account'       => [
        'actions'           => [
            'social'            => 'Canvia a l\'inici de sessió des de Kanka',
            'update_email'      => 'Actualitza l\'adreça de mail',
            'update_password'   => 'Actualitza la contrasenya',
        ],
        'email'             => 'Canvia l\'adreça de mail',
        'email_success'     => 'S\'ha actualitzat l\'adreça de mail.',
        'password'          => 'Canvia la contrasenya',
        'password_success'  => 'S\'ha actualitzat la contrasenya.',
        'social'            => [
            'error'     => 'Ja esteu utilitzant l\'inici de sessió de Kanka amb aquest compte.',
            'helper'    => 'El compte està vinculat amb :provider. Podeu desvincular-la i canviar a l\'inici de sessió estàndard de Kanka escrivint una contrasenya.',
            'success'   => 'El compte ara fa servir l\'inici de sessió de Kanka.',
            'title'     => 'De social a Kanka',
        ],
        'title'             => 'Compte',
    ],
    'api'           => [
        'helper'    => 'Benvingut a les APIs de Kanka. Genereu un Token d\'Accés Personal per a usar a les vostres crides a la API per a obtenir la informació de les campanyes a les que pertanyeu.',
        'link'      => 'Llegeix la documentació de l\'API',
        'title'     => 'API',
    ],
    'apps'          => [
        'actions'   => [
            'connect'   => 'Connecta',
            'remove'    => 'Elimina',
        ],
        'benefits'  => 'Kanka ofereix algunes integracions amb serveis de tercers. Hi ha més integracions planejades per al futur.',
        'discord'   => [
            'errors'    => [
                'add'   => 'Hi ha hagut un error vinculant el vostre compte de Discord amb Kanka. Si us plau, torneu a intentar-ho.',
            ],
            'success'   => [
                'add'       => 'S\'ha vinculat el vostre compte de Discord.',
                'remove'    => 'S\'ha desvinculat el vostre compte de Discord.',
            ],
            'text'      => 'Accediu als rols de subscripció automàticament.',
        ],
        'title'     => 'Integració d\'aplicacions',
    ],
    'boost'         => [
        'available_boosts'  => 'Millores disponibles: :amount/:max',
        'benefits'          => [
            'campaign_gallery'  => 'Una galeria per a pujar imatges que podeu reutilitzar a tota la campanya.',
            'entity_files'      => 'Fins a 10 fitxers pujats per entitat.',
            'entity_logs'       => 'Registres d\'entitat complets sobre allò que ha canviat amb cada actualització.',
            'first'             => 'Per a assegurar un progrés continu a Kanka, algunes característiques de la campanya es poden desbloquejar millorant-la. Les millores es desbloquegen a través de les subscripcions. Qualsevol que pugui veure una campanya pot millorar-la; així el màster no ha de pagar sempre el compte. Una campanya roman millorada mentre un usuari l\'estigui millorant i continuï fent suport a Kanka. Si una campanya deixa d\'estar millorada, les dades no es perden: només romanen ocultes fins que la campanya torni a ser millorada.',
            'header'            => 'Imatges de capçalera per a les entitats.',
            'headers'           => [
                'boosted'       => 'Beneficis de les campanyes millorades',
                'superboosted'  => 'Beneficis de les campanyes supermillorades',
            ],
            'helpers'           => [
                'boosted'       => 'Millorar una campanya fa servir només una millora.',
                'superboosted'  => 'Supermillorar una campanya fa servir un total de tres millores.',
            ],
            'images'            => 'Imatges per defecte personalitzades',
            'more'              => [
                'boosted'       => 'Totes les funcionalitats de les campanyes millorades',
                'superboosted'  => 'Totes les funcionalitats de les campanyes supermillorades',
            ],
            'recovery'          => 'Recuperació d\'entitats eliminades des de fins a :amount dies.',
            'superboost'        => 'Una campanya supermillorada fa servir 3 millores i desbloqueja funcionalitats addicionals, a més de les de les campanyes millorades.',
            'theme'             => 'Tema i estil personalitzat a nivell de campanya.',
            'third'             => 'Per a millorar una campanya, dirigiu-vos a la pàgina de la campanya i cliqueu el botó de ":boost_button" que hi ha sobre el botó de ":edit_button".',
            'tooltip'           => 'Descripcions emergents personalitzades per a les entitats.',
            'upload'            => 'Capacitat de pujada d\'arxius ampliada per a tots els membres de la campanya.',
        ],
        'buttons'           => [
            'boost'         => 'Millora',
            'superboost'    => 'Supermillora',
            'tooltips'      => [
                'boost'         => 'Millorar una campanya gasta :amount de les vostres millores',
                'superboost'    => 'Supermillorar una campanya gasta :amount de les vostres millores',
            ],
            'unboost'       => 'Treure la millora',
        ],
        'campaigns'         => 'Campanyes millorades :count/:max',
        'exceptions'        => [
            'already_boosted'       => 'La campanya :name ja està millorada.',
            'exhausted_boosts'      => 'Us heu quedat sense millores. Elimineu una millora d\'una campanya abans de donar-la-hi a una altra.',
            'exhausted_superboosts' => 'Us heu quedat sense millores. Calen 3 millores per a supermillorar una campanya.',
        ],
        'modals'            => [
            'more'  => [
                'action'    => 'Més millores?',
                'body'      => 'Podeu obtenir més millores pujant el vostre nivell de subscripció o eliminant-ne alguna d\'una altra campanya. En treure la millora d\'una campanya, no s\'esborrarà cap informació; només romandrà oculta fins quan torneu a afegir-hi millores.',
                'title'     => 'Obtenir més millores',
            ],
        ],
        'success'           => [
            'boost'         => 'S\'ha millorat la campanya :name.',
            'delete'        => 'La vostra millora s\'ha tret de :name.',
            'superboost'    => 'S\'ha supermillorat la campanya :name',
        ],
        'title'             => 'Millorar',
        'unboost'           => [
            'description'   => 'Segur que voleu deixar de millorar la campanya :tag?',
            'title'         => 'Deixar de millorar una campanya',
        ],
    ],
    'countries'     => [
        'austria'       => 'Àustria',
        'belgium'       => 'Bèlgica',
        'france'        => 'França',
        'germany'       => 'Alemanya',
        'italy'         => 'Itàlia',
        'netherlands'   => 'Països Baixos',
        'spain'         => 'Espanya',
    ],
    'invoices'      => [
        'actions'   => [
            'download'  => 'Descarrega el PDF',
            'view_all'  => 'Veu-les totes',
        ],
        'empty'     => 'Sense factures',
        'fields'    => [
            'amount'    => 'Quantitat',
            'date'      => 'Data',
            'invoice'   => 'Factura',
            'status'    => 'Estat',
        ],
        'header'    => 'Podeu descarregar les últimes 24 factures a continuació.',
        'status'    => [
            'paid'      => 'Pagada',
            'pending'   => 'Pendent',
        ],
        'title'     => 'Factures',
    ],
    'layout'        => [
        'success'   => 'S\'han actualitzat les opcions de disseny.',
        'title'     => 'Disseny',
    ],
    'marketplace'   => [
        'fields'    => [
            'name'  => 'Nom al mercat',
        ],
        'helper'    => 'Per defecte, el vostre nom d\'usuari es mostra al :marketplace. Podeu canviar-lo en aquest camp.',
        'title'     => 'Configuració del Mercat',
        'update'    => 'S\'ha guardat la configuració del Mercat.',
    ],
    'menu'          => [
        'account'               => 'Compte',
        'api'                   => 'API',
        'apps'                  => 'Aplicacions',
        'billing'               => 'Mètode de pagament',
        'boost'                 => 'Millorar',
        'invoices'              => 'Factures',
        'layout'                => 'Disseny',
        'marketplace'           => 'Mercat',
        'other'                 => 'Altres',
        'patreon'               => 'Patreon',
        'payment_options'       => 'Opcions de pagament',
        'personal_settings'     => 'Configuració personal',
        'profile'               => 'Perfil',
        'settings'              => 'Configuració',
        'subscription'          => 'Subscripció',
        'subscription_status'   => 'Estat de la subscripció',
    ],
    'patreon'       => [
        'deprecated'    => 'Funcionalitat discontinuada. Si desitgeu fer suport a Kanka, podeu fer-ho mitjançant una :subscription. La vinculació amb Patreon encara continua activa per als nostres Patrons que van vincular els seus comptes abans de la mudança de Patreon.',
        'pledge'        => 'Pledge :name',
        'remove'        => [
            'button'    => 'Desvincula el meu compte de Patreon',
            'success'   => 'S\'ha desvinculat el vostre compte de Patreon.',
            'text'      => 'Desvincular el vostre compte de Patreon de Kanka eliminarà els vostres bonus, el vostre nom del saló de la fama, les vostres millores i altres funcionalitats vinculades. No obstant això, el vostre contingut millorat no es perdrà: si torneu a subscriure-us, tornareu a tenir accés a aquestes dades, incloent la possibilitat de tornar a millorar aquesta campanya.',
            'title'     => 'Desvincular el compte de Patreon de Kanka',
        ],
        'title'         => 'Patreon',
    ],
    'profile'       => [
        'actions'   => [
            'update_profile'    => 'Actualiza el perfil',
        ],
        'avatar'    => 'Foto de perfil',
        'success'   => 'S\'ha actualitzat el perfil.',
        'title'     => 'Perfil personal',
    ],
    'subscription'  => [
        'actions'               => [
            'cancel_sub'        => 'Cancela la subscripció',
            'subscribe'         => 'Subscriu-me',
            'update_currency'   => 'Guarda com a moneda preferida',
        ],
        'benefits'              => 'En donar-nos suport, es desbloquegen noves :features i ens ajudeu a dedicar més temps a la millora de Kanka. No es guarda cap informació bancària. Usem :stripe per a gestionar els cobraments.',
        'benefits_features'     => 'funcionalitats increïbles',
        'billing'               => [
            'helper'    => 'La vostra informació de pagament es processa i es guarda de manera segura mitjançant :stripe. Aquest mètode de pagament s\'usarà per a totes les vostres subscripcions.',
            'saved'     => 'Mètode de pagament guardat',
            'title'     => 'Edita el mètode de pagament',
        ],
        'cancel'                => [
            'text'  => 'Ens sap greu que marxeu! En cancel·lar la vostra subscripció, aquesta continuarà activa fins al nou cicle de facturació, després del qual perdreu les millores de campanya i altres beneficis relacionats. No dubteu en informar-nos sobre com podem millorar o què us ha dut a prendre aquesta decisió.',
        ],
        'cancelled'             => 'S\'ha cancel·lat la subscripció. Podeu renovar-la una vegada el període de la subscripció actual hagi acabat.',
        'change'                => [
            'text'  => [
                'monthly'   => 'Us esteu subscrivint al nivell :tier, que costa :amount mensuals.',
                'yearly'    => 'Us esteu subscrivint al nivell :tier, que costa :amount anuals.',
            ],
            'title' => 'Canvia el nivell de subscripció',
        ],
        'coupon'                => [
            'check'         => 'Comprova un codi promocional',
            'invalid'       => 'Codi promocional no vàlid.',
            'label'         => 'Codi promocional',
            'percent_off'   => ':percent% de descompte per la vostra primera subscripció anual!',
        ],
        'currencies'            => [
            'eur'   => 'Euros',
            'usd'   => 'Dòlars estatunidencs',
        ],
        'currency'              => [
            'title' => 'Canvia la moneda de facturació',
        ],
        'errors'                => [
            'callback'      => 'El nostre proveïdor de pagaments ens ha informat d\'un error. Si us plau, torneu a intentar-ho o informeu-nos si el problema persisteix.',
            'subscribed'    => 'No s\'ha pogut processar la subscripció. Stripe ens ha donat aquest missatge:',
        ],
        'fields'                => [
            'active_since'      => 'Activa des del',
            'active_until'      => 'Activa fins el',
            'billing'           => 'Cobrament',
            'currency'          => 'Moneda de cobrament',
            'payment_method'    => 'Mètode de pagament',
            'plan'              => 'Pla actual',
            'reason'            => 'Raó',
        ],
        'helpers'               => [
            'alternatives'          => 'Paga per la subscripció usant :method. Aquest mètode de pagament no es renovarà automàticament al final de la subscripció. :method només està disponible amb euros.',
            'alternatives_warning'  => 'No es pot millorar la subscripció usant aquest mètode. Si us plau, feu una nova subscripció quan l\'actual acabi.',
            'alternatives_yearly'   => 'A causa de les restriccions dels pagaments recurrents, :method només està disponible per a les subscripcions anuals.',
        ],
        'manage_subscription'   => 'Gestiona la subscripció',
        'payment_method'        => [
            'actions'       => [
                'add_new'           => 'Afegeix un nou mètode de pagament',
                'change'            => 'Canvia el mètode de pagament',
                'save'              => 'Guarda el mètode de pagament',
                'show_alternatives' => 'Mètodes de pagament alternatius',
            ],
            'add_one'       => 'Encara no teniu cap mètode de pagament guardat.',
            'alternatives'  => 'Podeu subscriure-us usant aquests mètodes de pagament alternatius. Això farà un sol cobrament al vostre compte i no es renovarà automàticament cada mes.',
            'card'          => 'Targeta',
            'card_name'     => 'Nom a la targeta',
            'country'       => 'País de residència',
            'ending'        => 'Acaba en',
            'helper'        => 'S\'usarà aquesta targeta per a totes les vostres subscripcions.',
            'new_card'      => 'Afegeix un nou mètode de pagament',
            'saved'         => ':brand que acaba en :last4',
        ],
        'placeholders'          => [
            'reason'    => 'Opcionalment, podeu explicar-nos per què ja no feu suport a Kanka. Que faltava alguna cosa? Va canviar la vostra situació financera?',
        ],
        'plans'                 => [
            'cost_monthly'  => ':amount :currency mensuals',
            'cost_yearly'   => ':amount :currency anuals',
        ],
        'sub_status'            => 'Informació sobre la subscripció',
        'subscription'          => [
            'actions'   => [
                'downgrading'       => 'Contacteu-nos per a baixar de nivell',
                'rollback'          => 'Canvia a Kobold',
                'subscribe'         => 'Canvia a :tier mensualment',
                'subscribe_annual'  => 'Canvia a :tier anualmente',
            ],
        ],
        'success'               => [
            'alternative'   => 'S\'ha registrat el pagament. Rebreu una notificació quan acabem de processar-ho i s\'activi la subscripció.',
            'callback'      => 'La subscripció ha tingut èxit. El vostre compte s\'actualitzarà quan el nostre proveïdor de pagaments ens informi del canvi (pot portar alguns minuts).',
            'cancel'        => 'S\'ha cancel·lat la vostra subscripció. Continuarà activa fins al final del període de pagament.',
            'currency'      => 'S\'ha actualitzat la vostra moneda preferida.',
            'subscribed'    => 'La subscripció ha tingut èxit. No oblideu subscriure-us a la newsletter de votacions comunitàries per a assabentar-vos quan s\'obri una votació! Podeu canviar la configuració de newsletters des del perfil.',
        ],
        'tiers'                 => 'Nivells de subscripció',
        'trial_period'          => 'Les subscripcions anuals tenen un període de cancel·lació de 14 dies. Contacteu-nos per :email si vols cancel·lar la subscripció anual i recuperar els diners.',
        'upgrade_downgrade'     => [
            'button'    => 'Informació sobre pujar o baixar de nivell',
            'cancel'    => [
                'bullets'   => [
                    'bonuses'   => 'Els bonus es mantindran actius fins al final del vostre periode de pagament.',
                    'boosts'    => 'El mateix passa amb les vostres campanyes millorades. Les funcionalitats millorades quedaran amagades però no s\'esborraran quan la campanya deixi d\'estar millorada.',
                    'kobold'    => 'Per a cancelar la vostra subscripció, canvieu al nivell de Kobold.',
                ],
                'title'     => 'Cancelar la subscripció',
            ],
            'downgrade' => [
                'bullets'   => [
                    'end'   => 'El vostre nivell actual estarà actiu fins al final del cicle de pagament actual, després del qual es baixarà la subscripció al nou nivell.',
                ],
                'title'     => 'Baixar de nivell',
            ],
            'upgrade'   => [
                'bullets'   => [
                    'immediate' => 'Es cobrarà amb el vostre mètode de pagament immediatament i tindreu accés al nou nivell.',
                    'prorate'   => 'En pujar de nivell de Owlbear a Elemental, només es cobrarà la diferència entre els dos nivells.',
                ],
                'title'     => 'Pujar de nivell',
            ],
        ],
        'warnings'              => [
            'incomplete'    => 'No hem pogut fer el cobrament a la vostra targeta de crèdit. Si us plau, actualitzeu la informació de la targeta i tornarem a intentar-ho en els pròxims dies. Si torna a fallar, la  subscripció serà cancel·lada.',
            'patreon'       => 'El vostre compte es troba vinculat amb Patreon. Desvinculeu-lo des de la configuració de :patreon abans de canviar-la per una subscripció de Kanka.',
        ],
    ],
];
