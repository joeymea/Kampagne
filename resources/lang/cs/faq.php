<?php

return [
    'account-deletion'      => [
        'account_settings'  => 'Nastavení účtu',
        'answer'            => 'Chceš-li smazat svůj účet, jdi na stránku :account a sjeď dolů k sekci smazání účtu. Tím smažeš svůj účet a všechna tažení, kde jsi posledním členem.',
        'question'          => 'Jak smazat svůj účet?',
    ],
    'app_backup'            => [
        'answer'    => 'Zálohujeme dvakrát denně, abychom snížili riziko ztráty dat. I naše vlastní tažení udržujeme na tomto serveru, takže nechceme riskovat!',
        'question'  => 'Jak často se zálohují data v systému Kanka?',
    ],
    'attribute-templates'   => [
        'answer'    => <<<'TEXT'
Nejlépe vysvětlíme Šablony atributů na příkladu.
Řekněme, že tvůj svět obsahuje mnoho míst a na každém z těchto míst si chceš udržovat atributy, udávající "Počet obyvatel", "Podnebí" a "Úroveň kriminality".

Samozřejmě můžeš tyto atributy přidávat zvlášť ke každému místu, ale to by bylo dosti pracné a čas od času možná na některý z těchto atributů zapomeneš. V takové situaci se hodí využití Šablony atributů.

Můžeš vytvořit šablonu s těmito atributy ("Počet obyvatel", "Podnebí" a "Úroveň kriminality" apod.) a pak ji využít při tvorbě míst. Díky tomu budou všechny místa, vytvořená s pomocí této šablony obsahovat připravené atributy a nemusíš si je už pamatovat!
TEXT
,
        'question'  => 'K čemu jsou dobré Šablony atributů?',
    ],
    'backup'                => [
        'answer'    => 'Jednou denně lze exportovat data všech svých tažení jako ZIP archiv. Klepni na "Tažení" v nabídce nalevo a poté na "Exportovat". Tím se spustí export dat, který bude dostupný po 30 minut. Tento export nelze znovu nahrát do systému Kanka - je určený pouze pro tvé vlastní potřeby, pokud systém nechceš nadále používat.',
        'question'  => 'Jak mohu zálohovat nebo exportovat svá tažení?',
    ],
    'bugs'                  => [
        'answer'    => 'Pokud můžeš, připoj se k našemu Discord serveru :discord a nahlaš chybu na kanálu #error-and-bugs.',
        'question'  => 'Jak mohu nahlásit chybu systému?',
    ],
    'campaign-sync'         => [
        'answer'    => 'Tuto funkci systém Kanka nepodporuje. Pokud bys ale chtěl vést více skupin dobrodruhů ve stejném světě, můžeš pro ně udržovat samostatná dobrodružství, štítky a oddělovat je pomocí oprávnění.',
        'question'  => 'Mohu používat stejné objekty ve více taženích?',
    ],
    'custom'                => [
        'answer'    => <<<'TEXT'
Systém Kanka nabízí předdefinované typy objektů, které jsou spolu navzájem propojeny. Možnost používat vlastní typy objektů by vyžadovala zcela jiný přístup ke zpracování dat v systému a narušila by tak funkci systému, zaměřenou na co nejsnazší budování vlastního světa, namísto na způsob organizace dat. 
Určitý kompromis nabízí možnost využívání štítků, které poskytují velmi flexibilní způsob označování objektů.
TEXT
,
        'question'  => 'Mohu vytvořit vlastní typy objektů?',
    ],
    'delete-campaign'       => [
        'answer'    => 'Přejdi na nástěnku tažení a klepni na "Tažení" v nabídce nalevo. Tlačítko "Odstranit" se zobrazí, pokud jsi poslední člen tažení. Odstranění tažení je trvalá akce, která smaže všechna data, uložená na serverech, včetně obrázků.',
        'question'  => 'Jak mohu odstranit tažení?',
    ],
    'discord'               => [
        'answer'    => 'Chceš-li propojit své účty, klepni nejdřív na svého avatara vpravo nahoře a pak na tlačítko Profil. Poté přejdi na podstránku :apps a klepni na Propojit.',
        'question'  => 'Jak mohu propojit mé účty v systémech Kanka a Discord?',
    ],
    'early-access'          => [
        'answer'    => 'Předběžným přístupem odměňujeme naše věrné předplatitele - na 30 dní jim ve výhradním režimu zpřístupníme nejnovější moduly, takže si je mohou vyzkoušet dříve než ostatní.',
        'question'  => 'Co znamená Předběžný přístup?',
    ],
    'entity-notes'          => [
        'answer'    => 'Všem objektům lze přidávat Poznámky, což jsou textové bloky, které mohou být viditelné pouze pto tebe (hodí se pro spolupráci s PJem) nebo pro členy skupiny Správců nebo pro všechny. Můžeš také svým hráčům dát oprávnění pro vytváření a úpravu poznámek objektů aniž by měli oprávnění k úpravám celého objektu.',
        'question'  => 'Jak systém Kanka zachází s částečně skrytými informacemi?',
    ],
    'fields'                => [
        'answer'    => 'Odpověď',
        'category'  => 'Kategorie',
        'locale'    => 'Jazyk',
        'order'     => 'Pořadí',
        'question'  => 'Otázka',
    ],
    'free'                  => [
        'answer'    => <<<'TEXT'
Ano! Věříme, že tvá finanční situace by neměla ovlivňovat tvou možnost hrát Hry na hrdiny nebo vytvářet jejich světy a základní funkce systému budeme vždy poskytovat zdarma.
Pokud bys ale chtěl hrát o něco aktivnější roli, můžeš nás podpořit prostřednictvím předplatného a získat tak mj. možnost hlasovat o funkcích, které by se ti líbily nejvíce.

Kromě možnosti ovlivňovat směr vývoje systému Kanka, také získáš přístup ke zvýhodněním :boosters, budeš moci nahrávat větší soubory, tvé jméno se zapíše do síně slávy a mimo jiné, získáš i hezčí systémové ikonky!
TEXT
,
        'question'  => 'Zůstane Kanka použitelná zdarma?',
    ],
    'gods-and-religions'    => [
        'answer'    => 'Bohy doporučujeme vytvářet jako Postavy a náboženství jako Organizace. Chceš-li se snadno orientovat ve svých božstvech, doporučujeme je vytvářet s vhodným štítkem nebo typem.',
        'question'  => 'Kde mohu vytvářet náboženství a bohy?',
    ],
    'help'                  => [
        'answer'    => 'Především děkujeme, že nám chceš pomoci! Vždy uvítáme překladatele, testery nových funkcí nebo lektory pro naše nové uživatele. Pokud máš možnost dát vědět dalším lidem o systému Kanka, budeme také rádi. Ale nejlepší způsob, jak nám pomoci, bude připojit se na náš Discord server :discord, kde máme kanál věnovaný pro výpomoc.',
        'question'  => 'Jak vám mohu pomoci?',
    ],
    'map'                   => [
        'answer'    => 'Modul map podporuje obrázky typu PNG, JPG, WEBP a SVG. Mapy mohou obsahovat několik vrstev, skupiny a značky různých tvarů a velikostí, odkazující na další objekty v tažení.',
        'question'  => 'Mohu do systému Kanka nahrát mapy?',
    ],
    'mobile'                => [
        'answer'    => 'Aktuálně neexistuje žádná mobilní aplikace pro systém Kanka, ale velká část aplikace se bez problémů zobrazuje i na mobilních webových prohlížečích. Doufáme, že nám podpora od našich předplatitelů umožní časem zaplatit vývoj mobilní aplikace, ale není to priorita pro  nejbližší dobu.',
        'question'  => 'Existuje mobilní aplikace? Plánuje se?',
    ],
    'monsters'              => [
        'answer'    => 'Pro objekty jako národy, živočišné druhy, nestvůry a jakékoli jiné živé (či nemrtvé) bytosti mimo postavy, doporučujeme používat modul Rasy.',
        'question'  => 'Jak vytvářet nestvůry?',
    ],
    'multiworld'            => [
        'answer'    => 'Můžeš být členem libovolného množství tažení - ať už jsi je vytvořil sám nebo ne. Přepínat mezi taženími nebo vytvářet nová lze klepnutím na název tažení v postranní liště. Zobrazí se seznam tvých tažení a na konci i tlačítko pro tvorbu nového tažení.',
        'question'  => 'Mohu být členem více tažení?',
    ],
    'nested'                => [
        'answer'    => 'Pokud chceš své objekty vypisovat standardně ve vnořeném zobrazení (tak, jak se například zobrazí po klepnutí na tlačítko "Vnořené zobrazení" v seznamu míst), je možné to nastavit ve svém profilu mezi možnostmi zobrazení. Zde stačí zaškrtnout políčko "Vnořené zobrazení". Toto nastavení platí pro daný účet, nikoli pro tažení, jichž jsi členem.',
        'question'  => 'Je možné ve výchozím nastavení vypisovat seznamy ve vnořeném zobrazení?',
    ],
    'permissions'           => [
        'answer'    => 'Rozhodně! To je jeden z hlavních důvodů, proč jsme systém Kanka stvořili! Stačí pozvat své hráče do tažení a přiřadit jim vhodné role a oprávnění. Vytvořili jsme tento systém tak, aby byl co nejpřizpůsobivější, takže je možné jej provozovat jak v režimu "vše povol, zakaž vybrané", tak v režimu "vše zakaž, povol vybrané". Díky tomu by měl pokrýt jakékoli potřeby, které se mohou při tvorbě světa vyskytnout.',
        'question'  => 'Mohu omezit informace, které jsou dostupné uživatelům tažení?',
    ],
    'plans'                 => [
        'answer'    => <<<'TEXT'
V dlouhodobém výhledu bychom chtěli systém Kanka dovést do stavu, kdy bude široce použitelný pro tvorbu světa a správu tažení a zároveň neutrální s ohledem na používaný herní systém a komunita hráčů v něm může vytvářet obsah pomocí "Komunitních šablon". Také bychom chtěli dosáhnout toho, aby se systém Kanka mohl propojit s platformami na virtuální deskové hraní (VTT - Virtual Tabletop).

Protože systém Kanka sami používáme, nepředpokládáme, že bychom jej někdy přestali vyvíjet a zlepšovat. Nicméně projekt je typu "open-source" a jeho zdrojové kódy může převzít komunita, pokud bychom se jej přece jen rozhodli někdy opustit.
TEXT
,
        'question'  => 'Jaké máte dlouhodobé plány?',
    ],
    'public-campaigns'      => [
        'answer'    => 'Podívej se sám na stránku :public-campaigns a uvidíš.',
        'question'  => 'Jak používají systém Kanka ostatní?',
    ],
    'renaming-modules'      => [
        'answer'    => 'Přejmenovat moduly není přímo možné. Nicméně zvýhodněná (boosted) tažení mohou změnit názvy modulů v zobrazení postranní lišty pomocí vlastního CSS stylu.',
        'question'  => 'Je možné přejmenovat moduly? Například Rody na Klany nebo Organizace na Frakce?',
    ],
    'sections'              => [
        'community'     => 'Komunita',
        'general'       => 'Obecné',
        'other'         => 'Další',
        'permissions'   => 'Oprávnění',
        'pricing'       => 'Ceník',
        'worldbuilding' => 'Tvorba světa',
    ],
    'show'                  => [
        'return'    => 'Zpět k FAQ',
        'timestamp' => 'Naposledy aktualizováno :date',
        'title'     => 'FAQ :name',
    ],
    'unboost'               => [
        'answer'    => 'Pokud skončí zvýhodnění (boost) tažení, nedojde ke smazání žádných dat, vytvořených během období zvýhodnění, související informace a funkce se ale skryjí. Pokud dojde k obnovení zvýhodnění, související prvky se znovu zpřístupní stejně jako před ukončením zvýhodnění.',
        'question'  => 'Co se stane, když dojde k ukončení zvýhodnění (boost) tažení?',
    ],
    'user-switch'           => [
        'answer'    => 'Oprávnění mohou být komplikovaná - obzvláště u větších tažení. Jako správce tažení můžeš na stránce členů tažení klepnout na tlačítko "Zobrazit z pohledu", které se nachází u ostatních členů tažení. Poté tě systém přihlásí jako daného uživatele a uvidíš informace v tažení z pohledu daného uživatele. To je nejjednodušší způsob, jak zkontrolovat oprávnění v rámci tažení.',
        'question'  => 'Nastavil jsem oprávnění ke svému tažení. Mohu je nějak otestovat?',
    ],
    'visibility'            => [
        'answer'    => 'Do tvého tažení mohou nahlížet a pracovat s ním pouze uživatelé, které do něj pozveš. Tvá data jsou soukromá a pouze ty je můžeš ovládat. Můžeš ale svou kampaň označit za veřejnou a tím umožníš její prohlížení i uživatelům, kteří nejsou členy tvého tažení.',
        'question'  => 'Mohou ostatní nahlížet do mého světa?',
    ],
];
