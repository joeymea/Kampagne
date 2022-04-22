<?php

return [
    'create'                            => [
        'description'           => 'Crear nueva campaña',
        'helper'                => [
            'title'     => '¡Te damos la bienvenida a :name!',
            'welcome'   => <<<'TEXT'
Antes de continuar, necesitas un nombre para tu campaña. Este será el nombre de tu mundo. Si no tienes un buen nombre aún, no te preocupes, pues puedes cambiarlo más tarde o crear nuevas campañas.

¡Gracias por unirte a Kanka, y te damos la bienvenida a nuestra floreciente comunidad!
TEXT
,
        ],
        'success'               => 'Campaña creada.',
        'success_first_time'    => '¡La campaña ha sido creada! Como es tu primera campaña, hemos rellenado algunas cosas para que te familiarices y con suerte proveerte con algo de inspiración, para que veas que puedes conseguir.',
        'title'                 => 'Nueva campaña',
    ],
    'destroy'                           => [
        'action'    => 'Eliminar campaña',
        'helper'    => 'Solo puedes eliminar la campaña si eres el único miembro en ella.',
        'success'   => 'Campaña eliminada.',
    ],
    'edit'                              => [
        'success'   => 'Campaña actualizada.',
        'title'     => 'Editar campaña :campaign',
    ],
    'entity_note_visibility'            => [],
    'entity_personality_visibilities'   => [
        'private'   => 'La personalidad de los personajes nuevos es privada por defecto.',
    ],
    'entity_visibilities'               => [
        'private'   => 'Nuevas entidades privadas por defecto',
    ],
    'errors'                            => [
        'access'        => 'No tienes acceso a esta campaña.',
        'superboosted'  => 'Esta funcionalidad solo está disponible para las campañas supermejoradas.',
        'unknown_id'    => 'Campaña desconocida.',
    ],
    'export'                            => [
        'errors'            => [
            'limit' => 'Has alcanzado el máximo de una exportación por día. Por favor, inténtalo de nuevo mañana.',
        ],
        'helper'            => 'Exporta la campaña. Recibirás una notificación con el enlace de descarga.',
        'helper_secondary'  => 'Habrá dos archivos disponibles, uno con las entidades exportadas como JSON, y otro con las imágenes subidas a las entidades. Ten en cuenta que, en campañas grandes, la exportación de imágenes puede colgarse y solo puede recuperarse mediante la :api.',
        'helper_third'      => 'Los archivos JSON pueden abrirse con cualquier editor de textos. Representan los datos que se guardan en la base de datos de Kanka en un formato de texto. No se puede importar dicha exportación de vuelta a Kanka.',
        'success'           => 'Tu campaña se está preparando para exportar. Recibirás una notificación en Kanka a un zip descargable en cuanto esté lista.',
        'title'             => 'Exportar campaña :name',
    ],
    'fields'                            => [
        'boosted'                           => 'Mejorada por',
        'character_personality_visibility'  => 'Visibilidad por defecto de la personalidad',
        'connections'                       => 'Mostrar la tabla de conexiones de la entidad por defecto (en lugar del explorador de relaciones de las campañas mejoradas)',
        'css'                               => 'CSS',
        'description'                       => 'Descripción',
        'entity_count'                      => 'Número de entidades',
        'entity_privacy'                    => 'Privacidad por defecto de nuevas entidades',
        'entry'                             => 'Descripción de la campaña',
        'excerpt'                           => 'Extracto',
        'followers'                         => 'Seguidores',
        'header_image'                      => 'Imagen de cabecera',
        'image'                             => 'Imagen',
        'locale'                            => 'Idioma',
        'name'                              => 'Nombre',
        'nested'                            => 'Anidar las listas de entidades siempre que sea posible',
        'open'                              => 'Inscripciones abiertas',
        'post_collapsed'                    => 'Los nuevos posts en las entidades están colapsados por defecto.',
        'public'                            => 'Visibilidad de la campaña',
        'public_campaign_filters'           => 'Filtros de las campañas públicas',
        'related_visibility'                => 'Visibilidad de elementos relacionados',
        'rpg_system'                        => 'Sistemas RPG',
        'superboosted'                      => 'Supermejorada por',
        'system'                            => 'Sistema',
        'theme'                             => 'Tema',
        'visibility'                        => 'Visibilidad',
    ],
    'following'                         => 'Siguiendo',
    'helpers'                           => [
        'boost_required'                    => 'Esta funcionalidad requiere mejorar la campaña. Más información en la página de :settings.',
        'boost_required_multi'              => 'Estas funcionalidades requieren que la campaña esté mejorada. Para más información lee la página de :settings.',
        'boosted'                           => 'Algunas características están desbloqueadas porque esta campaña está mejorada. Para saber más sobre esto, echa un vistazo en la página de :settings.',
        'character_personality_visibility'  => 'Selecciona la privacidad por defecto para los rasgos de personalidad al crear un nuevo personaje como administrador.',
        'css'                               => 'Escribe tu propio CSS para las páginas de tu campaña. Ten en cuenta que abusar de esta herramienta puede llevar a la eliminación de tu CSS personalizado. Incumplimientos repetidos o graves pueden llevar a la eliminación de tu campaña.',
        'dashboard'                         => 'Personaliza la forma en que el widget se muestra en el tablero rellenando los campos siguientes.',
        'entity_count'                      => 'Este número se actualiza cada seis horas.',
        'entity_privacy'                    => 'Selecciona la privacidad por defecto al crear nuevas entidades como administrador.',
        'excerpt'                           => 'El extracto de la campaña se mostrará en el tablero principal. Escribe unas pocas líneas para introducir tu mundo. Si lo dejas en blanco, se mostrarán los primeros 1.000 caracteres de la descripción de la campaña.',
        'header_image'                      => 'La imagen que se muestra como fondo en el widget de la cabecera del tablero.',
        'hide_history'                      => 'Habilita esta opción para esconder el historial de entidades a los miembros no administradores.',
        'hide_members'                      => 'Habilita esta opción para esconder la lista de miembros de la campaña a los no administradores.',
        'locale'                            => 'El idioma en que está escrita tu campaña. Esto se usa para generar contenido y agrupar campañas públicas.',
        'name'                              => 'Tu campaña/mundo puede tener cualquier nombre, siempre y cuando contenga al menos 4 letras o números.',
        'permissions_tab'                   => 'Controla la privacidad y visibilidad de nuevos elementos mediante las opciones siguientes.',
        'public_campaign_filters'           => 'Facilita que otros encuentren tu campaña entre las demás proporcionando la siguiente información.',
        'public_no_visibility'              => '¡Ojo! Tu campaña es pública, pero el rol público no tiene acceso a nada. :fix.',
        'related_visibility'                => 'La visibilidad por defecto al crear un elemento con este campo (notas de entidad, relaciones, habilidades, etc.)',
        'system'                            => 'Si tu campaña es visible públicamente, el sistema se mostrará en la página de :link.',
        'systems'                           => 'Para evitar líos, algunos elementos de Kanka solo están disponibles en sistemas RPG específicos (por ejemplo, el bloque de stats de monstruo de D&D 5e). Si eliges un sistema soportado, se activarán dichos elementos.',
        'theme'                             => 'Establece un tema único para la campaña, anulando las preferencias de los usuarios.',
        'view_public'                       => 'Para ver tu campaña como lo haría un visitante público, abre un :link en una ventana de incógnito.',
        'visibility'                        => 'Hacer pública una campaña implica que todos los que tengan el enlace a ella la podrán ver.',
    ],
    'index'                             => [
        'actions'   => [
            'new'   => [
                'title' => 'Nueva campaña',
            ],
        ],
        'title'     => 'Campañas',
    ],
    'invites'                           => [
        'actions'               => [
            'add'   => 'Invitar',
            'copy'  => 'Copiar el enlace al portapapeles',
            'link'  => 'Nuevo enlace',
        ],
        'create'                => [
            'buttons'       => [
                'create'    => 'Crear invitación',
                'send'      => 'Enviar invitación',
            ],
            'success'       => 'Invitación enviada.',
            'success_link'  => 'Link creado. :link',
            'title'         => 'Invita a alguien a tu campaña',
        ],
        'destroy'               => [
            'success'   => 'Invitación eliminada.',
        ],
        'email'                 => [
            'link_text' => 'Unirse a la campaña de :name',
            'subject'   => '¡:name te ha invitado a que te unas a su campaña ":campaign" en kanka.io! Usa el siguiente enlace para aceptar su invitación.',
            'title'     => 'Invitación de :name',
        ],
        'error'                 => [
            'already_member'    => 'Ya eres miembro de esta campaña.',
            'inactive_token'    => 'Este identificador ya se ha usado o la campaña ya no existe.',
            'invalid_token'     => 'El identificador ya no es válido.',
            'login'             => 'Inicia sesión o regístrate para unirte a la campaña.',
        ],
        'fields'                => [
            'created'   => 'Enviado',
            'email'     => 'Correo electrónico',
            'role'      => 'Rol',
            'type'      => 'Tipo',
            'usage'     => 'Número máximo de usos',
        ],
        'helpers'               => [
            'email'     => 'Puede ser que nuestros correos se marquen como spam y pueden tardar unas horas hasta aparecer en tu buzón de entrada.',
            'validity'  => 'Cuántos usuarios pueden usar este enlace antes de que se desactive. Déjalo en blanco para que sea ilimitado.',
        ],
        'placeholders'          => [
            'email' => 'Correo electrónico de la persona a la que quieres invitar',
        ],
        'types'                 => [
            'email' => 'Correo electrónico',
            'link'  => 'Enlace',
        ],
        'unlimited_validity'    => 'Ilimitado',
        'usages'                => [
            'five'      => '5 usos',
            'no_limit'  => 'Ilimitado',
            'once'      => '1 uso',
            'ten'       => '10 usos',
        ],
    ],
    'leave'                             => [
        'confirm'   => '¿Seguro que quieres abandonar la campaña :name? No tendrás acceso a ella, a no ser que un administrador te invite de nuevo.',
        'error'     => 'No puedes abandonar la campaña.',
        'success'   => 'Has abandonado la campaña.',
    ],
    'members'                           => [
        'actions'               => [
            'help'          => 'Ayuda',
            'remove'        => 'Quitar de la campaña',
            'switch'        => 'Ver como',
            'switch-back'   => 'Volver a mi usuario',
        ],
        'create'                => [
            'title' => 'Añade un miembro a la campaña',
        ],
        'edit'                  => [
            'title' => 'Editar miembro :name',
        ],
        'fields'                => [
            'joined'        => 'Inscrito',
            'last_login'    => 'Última conexión',
            'name'          => 'Usuario',
            'role'          => 'Rol',
            'roles'         => 'Roles',
        ],
        'help'                  => 'No hay límite de miembros que puede tener una campaña.',
        'helpers'               => [
            'admin' => 'Como administrador de la campaña, puedes invitar a nuevos usuarios, eliminar usuarios inactivos y cambiar sus permisos. Para probar los permisos de un miembro, haz clic en "Ver como". Puedes leer más sobre esta herramienta en :link.',
            'switch'=> 'Ver como este usuario',
        ],
        'impersonating'         => [
            'message'   => 'Estás viendo la campaña como otro usuario. Algunas funcionalidades están deshabilitadas, pero el resto actúa exactamente como el usuario lo vería. Para volver a tu usuario, usa el botón "Volver a mi usuario" cerca del botón de Cerrar Sesión.',
            'title'     => 'Estás viendo como :name',
        ],
        'invite'                => [
            'description'   => 'Puedes invitar a tus amigos a unirse a la campaña mediante un enlace de invitación. Una vez acepten la invitación, se añadirán con su rol correspondiente. También puedes enviarles la invitación por correo electrónico, siempre y cuando no sea una dirección de Hotmail, ya que siempre rechazan los mails de Kanka.',
            'more'          => 'Puedes añadir más roles desde la :link.',
            'roles_page'    => 'Página de roles',
            'title'         => 'Invitaciones',
        ],
        'manage_roles'          => 'Configurar roles de usuario',
        'roles'                 => [
            'member'    => 'Miembro',
            'owner'     => 'Administrador',
            'player'    => 'Jugador',
            'public'    => 'Público',
            'viewer'    => 'Invitado',
        ],
        'switch_back_success'   => 'Has vuelto a tu usuario.',
        'title'                 => 'Miembros de la campaña :name',
        'updates'               => [
            'added'     => 'Se ha añadido el rol :role a :user.',
            'removed'   => 'Se ha quitado el rol :role de :user.',
        ],
        'your_role'             => 'Tu rol: <i>:role</i>',
    ],
    'open_campaign'                     => [
        'helper'    => 'Una campaña pública marcada como abierta permitirá que los usuarios puedan enviar solicitudes de inscripción para unirse a ella. La lista de solicitudes está en la página de :link.',
        'link'      => 'solicitudes de campaña',
        'statuses'  => [
            'closed'    => 'Cerrada',
            'open'      => 'Abierta a nuevas incorporaciones',
        ],
        'title'     => 'Campaña abierta',
    ],
    'options'                           => [],
    'panels'                            => [
        'boosted'   => 'Mejoras',
        'dashboard' => 'Tablero',
        'permission'=> 'Permisos',
        'setup'     => 'Configuración',
        'sharing'   => 'Compartir',
        'systems'   => 'Sistemas',
        'ui'        => 'Interfaz',
    ],
    'placeholders'                      => [
        'description'   => 'Un breve resumen de tu campaña',
        'locale'        => 'Código de idioma',
        'name'          => 'El nombre de tu campaña',
        'system'        => 'D&D 5e, Pathfinder, Fate...',
    ],
    'privacy'                           => [
        'hidden'    => 'Oculta',
        'private'   => 'Privada',
        'visible'   => 'Visible',
    ],
    'public'                            => [
        'helpers'   => [
            'introduction'  => 'Las campañas son privadas por defecto, pero se pueden hacer públicas. De esta forma todo el mundo podrá acceder a ellas y aparecerán en la página de :public-campaigns si tienen entidades visibles para el rol :public-role. Una campaña pública es visible para todos, pero para que su contenido se pueda ver, hay que configurar los permisos del rol :public-role.',
        ],
    ],
    'roles'                             => [
        'actions'       => [
            'add'           => 'Añadir un rol',
            'permissions'   => 'Configurar permisos',
            'rename'        => 'Renombrar rol',
            'save'          => 'Guardar rol',
        ],
        'admin_role'    => 'rol de administrador',
        'create'        => [
            'success'   => 'Rol creado.',
            'title'     => 'Crear un nuevo rol en :name',
        ],
        'destroy'       => [
            'success'   => 'Rol eliminado.',
        ],
        'edit'          => [
            'success'   => 'Rol actualizado.',
            'title'     => 'Editar rol :name',
        ],
        'fields'        => [
            'name'          => 'Nombre',
            'permissions'   => 'Permisos',
            'type'          => 'Tipo',
            'users'         => 'Usuarios',
        ],
        'helper'        => [
            '1' => 'Una campaña puede tener tantos roles como se quiera. El rol "Administrador" tiene acceso automáticamente a todo dentro de una campaña, pero cada uno de los demás roles puede tener permisos específicos en diferentes tipos de entidades (personajes, lugares, etc).',
            '2' => 'Las entidades pueden tener permisos más afinados mediante la pestaña "Permisos" de una entidad. Esta pestaña aparece cuando tu campaña tiene varios roles o miembros.',
            '3' => 'Se puede usar un sistema de "exclusión", donde los roles tienen acceso a todas las entidades, y usar la casilla de "Privado" en las entidades que se quieran ocultar. O bien, pueden darse pocos permisos a los roles, y configurar cada entidad para que sea visible individualmente.',
        ],
        'hints'         => [
            'campaign_not_public'   => 'El rol "Público" tiene permisos pero la campaña es privada. Puedes ajustar esto en la pestaña Compartir al editar la campaña.',
            'public'                => 'El rol "Público" se usa para los que visitan tu campaña pública.',
            'role_permissions'      => 'Habilitar el rol ":name" para que pueda hacer las siguientes acciones en todas las entidades.',
        ],
        'members'       => 'Miembros',
        'modals'        => [
            'details'   => [
                'button'    => 'Necesito ayuda',
                'campaign'  => 'Los permisos de la campaña permiten lo siguiente.',
                'entities'  => 'A continuación se muestra un resumen de los permisos de este rol.',
                'more'      => 'Para más detalles, mira nuestro tutorial en Youtube.',
                'title'     => 'Detalles de permisos',
            ],
        ],
        'permissions'   => [
            'actions'   => [
                'add'           => 'Crear',
                'dashboard'     => 'Tablero',
                'delete'        => 'Eliminar',
                'edit'          => 'Editar',
                'entity-note'   => 'Notas de entidad',
                'gallery'       => 'Galería',
                'manage'        => 'Configurar',
                'members'       => 'Miembros',
                'permission'    => 'Administrar permisos',
                'read'          => 'Ver',
                'toggle'        => 'Cambiar para todos',
            ],
            'helpers'   => [
                'add'           => 'Permite crear entidades de este tipo. Podrán ver y editar las entidades que creen aunque no tengan el permiso de ver o editar.',
                'dashboard'     => 'Permite editar los tableros y sus widgets.',
                'delete'        => 'Permite eliminar todas las entidades de este tipo.',
                'edit'          => 'Permite editar todas las entidades de este tipo.',
                'entity_note'   => 'Esto permite que los usuarios que no tengan permisos para editar una entidad puedan añadirle notas.',
                'gallery'       => 'Permite gestionar la galería de la campaña supermejorada.',
                'manage'        => 'Permite editar la campaña como un administrador, excepto eliminar la campaña.',
                'members'       => 'Permite invitar nuevos miembros a la campaña.',
                'permission'    => 'Permite configurar los permisos de las entidades de este tipo que puedan editar.',
                'read'          => 'Permite visualizar todas las entidades de este tipo que no sean privadas.',
            ],
            'hint'      => 'Este rol tiene acceso automático a todo.',
        ],
        'placeholders'  => [
            'name'  => 'Nombre del rol',
        ],
        'show'          => [
            'title' => 'Rol ":role"',
        ],
        'title'         => 'Roles de la campaña :name',
        'types'         => [
            'owner'     => 'Administrador',
            'public'    => 'Público',
            'standard'  => 'Estándar',
        ],
        'users'         => [
            'actions'   => [
                'add'       => 'Añadir miembro',
                'remove'    => ':user del rol :role',
            ],
            'create'    => [
                'success'   => 'Usuario añadido al rol.',
                'title'     => 'Añadir un miembro al rol :name',
            ],
            'destroy'   => [
                'success'   => 'Usuario eliminado del rol.',
            ],
            'fields'    => [
                'name'  => 'Nombre',
            ],
        ],
    ],
    'settings'                          => [
        'actions'   => [
            'enable'    => 'Habilitar',
        ],
        'boosted'   => 'Esta función está en beta y actualmente solo está disponible para las :boosted.',
        'edit'      => [
            'success'   => 'Ajustes de campaña actualizados.',
        ],
        'helper'    => 'Puedes activar o desactivar fácilmente todos los módulos de una campaña. Desactivar un módulo solo ocultará sus elementos relacionados, no los eliminará. Este cambio afecta a todos los usuarios de una campaña, incluyendo a los Administradores.',
        'helpers'   => [
            'abilities'     => 'Crea habilidades, proezas, hechizos o poderes y asígnalos a entidades.',
            'calendars'     => 'El sitio para definir los calendarios de tu mundo.',
            'characters'    => 'Las personas que viven en tu mundo.',
            'conversations' => 'Conversaciones ficticias entre personajes o entre usuarios de la campaña.',
            'dice_rolls'    => 'Una manera de manejar las tiradas de dados para aquellos que usan Kanka para campañas de rol.',
            'events'        => 'Celebraciones, festivales, desastres, cumpleaños, guerras...',
            'families'      => 'Clanes o familias, sus relaciones y sus miembros.',
            'inventories'   => 'Gestiona el inventario de tus entidades.',
            'items'         => 'Armas, vehículos, reliquias, pociones...',
            'journals'      => 'Observaciones escritas por los personajes, o preparación de la sesión del máster.',
            'locations'     => 'Planetas, planos, continentes, ríos, estados, asentamientos, templos, tabernas...',
            'maps'          => 'Sube mapas con diferentes capas y marcadores que señalen a otras entidades de la campaña.',
            'menu_links'    => 'Enlaces de menú personalizados en la barra lateral.',
            'notes'         => 'Tradiciones, religiones, historia, magia, razas...',
            'organisations' => 'Sectas, unidades militares, facciones, gremios...',
            'quests'        => 'Para llevar un seguimiento de varias misiones con personajes y localizaciones.',
            'races'         => 'Si tu campaña tiene más de una raza, de esta forma no las perderás de vista.',
            'tags'          => 'Cada entidad puede tener varias etiquetas. Éstas pueden pertenecer a otras etiquetas, y las entradas pueden filtrarse por etiqueta.',
            'timelines'     => 'Representa la historia de tu mundo con líneas de tiempo.',
        ],
        'title'     => 'Módulos de la campaña :name',
    ],
    'show'                              => [
        'actions'   => [
            'boost' => 'Mejorar campaña',
            'edit'  => 'Editar campaña',
            'leave' => 'Abandonar campaña',
        ],
        'menus'     => [
            'configuration'     => 'Configuración',
            'overview'          => 'General',
            'user_management'   => 'Usuarios',
        ],
        'tabs'      => [
            'achievements'      => 'Logros',
            'applications'      => 'Solicitudes',
            'campaign'          => 'Campaña',
            'default-images'    => 'Imágenes por defecto',
            'export'            => 'Exportar',
            'information'       => 'Información',
            'members'           => 'Miembros',
            'plugins'           => 'Plugins',
            'recovery'          => 'Recuperación',
            'roles'             => 'Roles',
            'settings'          => 'Módulos',
            'styles'            => 'Personalización',
        ],
        'title'     => 'Campaña :name',
    ],
    'superboosted'                      => [
        'gallery'   => [
            'error' => [
                'text'  => 'Subir imágenes en el editor de texto es una funcionalidad disponible solo para las :superboosted.',
                'title' => 'Subida de imágenes en la galería de campaña',
            ],
        ],
    ],
    'ui'                                => [
        'boosted'           => 'Mejorada',
        'collapsed'         => [
            'collapsed' => 'Colapsar/Expandir',
            'default'   => 'Por defecto',
        ],
        'connections'       => [
            'explorer'  => 'Explorador de relaciones (solo campañas mejoradas)',
            'list'      => 'Interfaz de lista',
        ],
        'entity_history'    => [
            'hidden'    => 'Solo visible para los administradores de campaña',
            'visible'   => 'Visible para los miembros',
        ],
        'fields'            => [
            'connections'       => 'Interfaz de conexiones entre entidades por defecto',
            'entity_history'    => 'Registros históricos de la entidad',
            'entity_image'      => 'Imagen de la entidad',
            'family_toolip'     => 'Familia del personaje',
            'member_list'       => 'Lista de miembros de la campaña',
            'nested'            => 'Disposición por defecto de las listas',
            'post_collapsed'    => 'Valor de colapsado/expandido por defecto de los posts',
        ],
        'helpers'           => [
            'connections'       => 'Al hacer clic en la subpágina de conexiones de una entidad, selecciona la interfaz por defecto.',
            'other'             => 'Otras opciones visuales para la campaña.',
            'post_collapsed'    => 'Al crear un nuevo post en una entidad, selecciona si estará colapsado o expandido por defecto.',
            'tooltip'           => 'Controla qué información se muestra en la descripción emergente al pasar el ratón sobre el nombre de una entidad.',
        ],
        'members'           => [
            'hidden'    => 'Solo visible para administradores de campaña',
            'visible'   => 'Visible para miembros',
        ],
        'nested'            => [
            'default'   => 'Por defecto',
            'nested'    => 'Anidada',
        ],
        'other'             => 'Otros',
    ],
    'visibilities'                      => [
        'private'   => 'Privada',
        'public'    => 'Pública',
        'review'    => 'Esperando revisión',
    ],
];
