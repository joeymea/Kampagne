<?php

return [
    'age'               => [
        'description'   => 'Il est possible de lier un personnage à un ou plusieurs calendriers de la campagne en allant sur la page Rappels du personnage. Sur cette page, ajouter un nouveau rappel et sélectionner la valeur Naissance ou Mort du champs type d\'événement. Si la naissance et la mort sont indiquées, l\'âge à la mort sera affiché. Si seulement la mort est indiquée, le nombre d\'années depuis lesquelles le personnage est décédé sera affiché.',
        'title'         => 'Âge et mort d\'un personnage',
    ],
    'api-filters'       => [
        'description'   => 'Les filtres suivants sont disponibles pour l\'API :name.',
        'title'         => 'Filtres d\'API',
    ],
    'attributes'        => [
        'con'               => 'Con',
        'description'       => 'Les attributs représentent des valeurs de l\'entité qui ne sont pas de longs textes. Il est possible de référencer d\'autres entités dans les attributs avec les mentions avancées :mention. Il est aussi possible de référencer d\'autres attributs de cette entité avec la syntaxe :attribute.',
        'level'             => 'Niveau',
        'link'              => 'Options pour les attributs',
        'math'              => 'Il est aussi possible d\'être créatif avec des opérations mathématiques. Par exemple, :example multipliera le :level avec le :con de l\'entité. Pour arrondir les valeurs, utiliser :floor ou :ceil.',
        'name'              => 'Le nom de l\'entité peut être référencé avec :name. Un attribut avec le nom name sera utilisé  à la place s\'il existe.',
        'pinned'            => 'Epingler un attribut en utilisant l\'icône :icon l\'affichera sur le menu de l\'entité sous l\'image.',
        'private'           => 'Les attributs privés en utilisant :icon ne sont que visibles pour les membres du rôle admin de la campagne.',
        'random'            => 'Lors de la création ou de la modification d\'un modèle d\'attribut, il est possible de définir des attributs aléatoires. Cela peut être une valeur aléatoire entre deux nombres séparés par:dash, ou une valeur aléatoire d\'une liste de valeurs séparées par :comma. La valeur de l\'attribut est déterminée lorsque le modèle est appliqué à une entité ou lorsqu\'une entité est créée.',
        'random_examples'   => 'Par example, pour avoir un nombre entre 1 et 100, utiliser :number. Pour avoir une valeur d\'une liste d\'option, utiliser :list.',
        'title'             => 'Attributs',
    ],
    'dice'              => [
        'description'               => 'Exemples de jets de dés: "d20", "4d4+4", "d%" pour un pourcentage et "df" pour un jet Fudge.',
        'description_attributes'    => 'Il est aussi possible d\'accéder aux paramètres d\'un personnage en utilisant la syntaxa {character.nom_d_attribut}. Par example, {character.niveau}d6+{character.force}.',
        'more'                      => 'D\'autres options sont expliquées sur le site du plugin.',
        'title'                     => 'Jets de dés',
    ],
    'entity_templates'  => [
        'description'   => 'Lors de la création de nouvelles entités, tu peux en créer une basée sur un modèle au lieu de commencer avec un formulaire vide. Pour définir une entité comme modèle, visualises-la et clique sur :link dans les actions :action en haut à droite. Lors de l\'affichage d\'une liste d\'entités, des modèles de ce type d\'entité seront disponibles à côté du bouton :new. Plusieurs modèles pour chaque type d\'entité peuvent être définis.',
        'link'          => 'Comment définir des modèles',
        'remove'        => 'Pour qu\'une entité n\'apparaisse plus comme modèle, cliquer sur l\'action :remove qui remplace :link détaillé auparavant.',
        'title'         => 'Modèles d\'entités',
    ],
    'filters'           => [
        'attributes'    => [
            'exclude'   => '!Niveau',
            'first'     => 'Il est possible de filter les entités avec leurs attributs. Le champ cherche des résultats exactes pour le nom et la valeur. Si la valeur est laissée vide, cela cherchera des entités avec un attribut de ce nom. Il est possible d\'utiliser :exclude pour exclure les entités avec un attribut nommé Niveau.',
            'second'    => 'Le filtre n\'évalue pas les calculations d\'attributs. Si un attribute a une valeur de :code, chercher pour le résultat de la calculation n\'est pas possible.',
        ],
        'clipboard'     => 'Lorsque des filtres sont actifs, le bouton copier les filtres devient actif. Ce bouton copie les filtres dans le presse-papier, et cette valeur peut être utilisée dans le champ filtre des widgets de tableau de bord ou des liens rapides.',
        'description'   => 'Utilise les filtres pour limiter le nombre de résultats. Les champs de texte supportent plusieurs fonctionnalités pour plus de granularité.',
        'empty'         => 'Le code :tag: dans un champ cherche pour toutes les entités ou ce champ est vide.',
        'ending_with'   => 'En plaçant un :tag à la fin du texte, seuls les résultats avec exactement ce terme seront affichés.',
        'multiple'      => 'Il est possible de combiner des options sur les champs de text avec la syntaxe :syntax. Par example :example.',
        'session'       => 'Les filtres et colonnes ordonnées sont enregistrés dans ta session. Du moment que tu restes connecté, il n\'est pas nécessaire de les redéfinir sur chaque page.',
        'starting_with' => 'En plaçant un :tag au début du texte, seuls les résultats ne contenant pas ce texte seront affichés.',
        'title'         => 'Comment utiliser les filtres',
    ],
    'link'              => [
        'advanced'          => [
            'title' => 'Mentions avancées',
        ],
        'anchor'            => 'La mention avancée peut aussi spécifier l\'ancre HTML vers lequel le liens ira avec :example.',
        'attribute'         => [
            'description'   => 'Pour référencer des attributs de cette entité, utiliser la touche :code. Ceci fonctionne seulement sur les attributs sauvegardés de l\'entité.',
            'title'         => 'Attributs',
        ],
        'auto_update'       => 'Les liens vers d\'autres entités seront automatiquement mis à jour lorsque le nom ou la description de l\'entité cible est modifié.',
        'description'       => 'Un lien vers une entité peut être facilement inséré en utilisant \'@\' dans le text. \'#\' peut être utilisé pour avoir une liste de mois depuis les calendriers de la campagne.',
        'filtering'         => [
            'description'   => 'Filtrer pour trouver des entités est facile.',
            'exact'         => 'Ecrire :code pour trouver des entités qui ont exactement ce nom.',
            'space'         => 'Ecrire :code pour trouver des entités avec un espace dans le nom.',
            'title'         => 'Filtres',
        ],
        'formatting'        => [
            'text'  => 'La liste des balises et attributs HTML autorisés peut être consultée sur notre :github.',
            'title' => 'Mise en page',
        ],
        'friendly_mentions' => 'Lier vers d\'autres entités avec :code et les premiers caractères d\'une entité pour la rechercher. Cela injectera :example dans l\'editeur de texte et affichera un lien vers l\'entité lors de la lecture.',
        'mention_helpers'   => 'Si le nom de l\'entité contient des espaces, utiliser :example à la place d\'espace. :exact peut être utilisé pour chercher des entités avec exactement ce nom.',
        'mentions'          => 'Créer des liens vers d\'autres entités en saisissant :code suivi du nom d\'une entité pour la chercher. Cela injectera :example dans l\'editeur. Le nom affiché peut être contrôlé avec :example_name. Le lien vers une sous-page peut être contrôlé avec :example_page. Le lien vers un onglet peut être contrôlé avec :example_tab.',
        'mentions_field'    => 'Il est aussi possible d\'afficher un champ de l\'entité au lieu du nom avec :code.',
        'month'             => [
            'title' => 'Mois des calendriers',
        ],
        'months'            => 'Saisis :code pour avoir une liste de mois des calendriers de la campagne.',
        'options'           => 'Quelques options: :options.',
        'overview'          => 'Lier facilement aux entités de la campagne en écrivant :code et trois lettres ou plus.',
        'title'             => 'Liens vers d\'autres éléments et raccourcis',
    ],
    'map'               => [
        'description'   => 'Uploader une carte dans un lieu active le menu "Carte" sur ce lieu, ainsi qu\'un lien vers la carte depuis la liste des lieux de la campagne. Les utilisateurs avec les droits de modification d\'une carte peuvent activer le mode \'Edition\' en visionnant la carte. Ceci permet d\'ajouter des Points sur la carte. Un Point peut être un lien vers une entité existante ou un champ texte.',
        'private'       => 'Les membres du rôle Admin de la campagne peuvent rendre les cartes privées. Cela permet à un utilisateur de voir un lieu tout en gardant la carte secrète.',
        'title'         => 'Carte de lieux',
    ],
    'pins'              => [
        'description'   => 'Les entités peuvent avoir leurs relations et attributs épinglés sur la droite du mode histoire. Un élément peut être épinglé lors de l\'édition en cliquant sur le champs épingler ou l\'étoile.',
        'title'         => 'Épinglé',
    ],
    'public'            => 'Une vidéo sur Youtube explique comment fonctionne les campagnes publiques.',
    'title'             => 'Aides',
    'troubleshooting'   => [
        'description'       => 'Un membre de l\'équipe Kanka t\'as envoyé vers cette page. Sélectionnes une campagne dans la liste pour générer un jeton. Ce jeton nous permettra de rejoindre la campagne en tant qu\'administrateur.',
        'errors'            => [
            'token_exists'  => 'Un jeton existe déjà pour :campaign.',
        ],
        'save_btn'          => 'Générer le jeton',
        'select_campaign'   => 'Sélectionner une campagne',
        'subtitle'          => 'J\'ai besoin d\'aide!',
        'success'           => 'Copies le jeton et envois le à un membre de l\'équipe de Kanka.',
        'title'             => 'Dépannage',
    ],
    'widget-filters'    => [
        'description'   => 'Les entités affichées peuvent être filtrées en indiquant une liste de champs et leur valeur. Par example, utiliser :example pour filter les personnages morts et de type NPC.',
        'link'          => 'filtres de widget',
        'more'          => 'Tu peux copier les valeurs de l\'URL sur les listes d\'entités. Par exemple, lorsque tu affiches les personnages de la campagne, filtres sur le type de personnages que tu souhaites afficher et copies les valeurs après la :question dans l\'URL.',
        'title'         => 'Filtres de widget de tableau de bord',
    ],
];
