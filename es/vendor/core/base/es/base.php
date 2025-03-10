<?php

return [
    'yes' => 'Sí',
    'no' => 'No',
    'is_default' => '¿Es predeterminado?',
    'proc_close_disabled_error' => 'La función proc_close() no está activa. Póngase en contacto con su proveedor de alojamiento para habilitar'."\n"
        .'   O Agregue el siguiente comando a .env: CAN_EXECUTE_COMMAND=false to disable this feature.',
    'email_template' => [
        'header' => 'Diseño del encabezado del correo electrónico',
        'footer' => 'Diseño del pie de correo electrónico',
        'site_title' => 'Título del sitio',
        'site_url' => 'Dirección',
        'site_logo' => 'Logo del sitio',
        'date_time' => 'Fecha actual',
        'date_year' => 'Año en curso',
        'site_admin_email' => 'Correo del administrador',
        'email_css' => 'Correo electrónico CSS',
        'site_email' => 'Correo electrónico del administrador del sitio',
        'site_copyright' => 'Derechos de autor del sitio',
        'site_social_links' => 'Enlaces sociales del sitio (tipo de dato: arreglo)',
        'settings' => 'Valores de configuración',
        'preview' => 'Vista previa',
        'icon_variables' => 'Variables de iconos',
        'usage' => 'Uso:',
        'icon_variable_usage_description' => 'Puedes copiar la variable :variable y pegarla:',
        'add_new_icons' => 'Agregar nuevos íconos:',
        'add_more_icon_description' => 'Puedes añadir más íconos subiéndolos (formatos admitidos: PNG, JPEG, JPG y GIF) a la siguiente ruta: :path',
        'missing_icons' => 'Faltan los íconos',
        'missing_icons_description' => 'Los siguientes íconos están faltando en la ruta: :to, por favor copia todos los archivos de íconos desde :from a :to.',
        'twig' => [
            'tag' => [
                'apply' => 'La etiqueta \'apply\' te permite aplicar filtros Twig.',
                'for' => 'Recorre cada elemento en una secuencia.',
                'if' => 'La declaración if en Twig es comparable con las declaraciones if de PHP',
            ],
        ],
    ],
    'change_image' => 'Cambiar imagen',
    'delete_image' => 'Eliminar imagen',
    'preview_image' => 'Ver imagen',
    'image' => 'Imagen',
    'using_button' => 'Usando un botón',
    'select_image' => 'Seleccionar imagen',
    'click_here' => 'Haz clic aquí',
    'to_add_more_image' => 'para agregar más imágenes',
    'add_image' => 'Agregar imagen',
    'tools' => 'Herramientas',
    'close' => 'Cerrar',
    'panel' => [
        'others' => 'Otros',
        'system' => 'Sistema',
        'manage_description' => 'Administrar :name',
    ],
    'global_search' => [
        'title' => 'Búsqueda',
        'search' => 'Búsqueda',
        'clear' => 'Limpiar',
        'no_result' => 'No se encontraron resultados',
        'to_select' => 'para seleccionar',
        'to_navigate' => 'para navegar',
        'to_close' => 'para cerrar',
    ],
    'validation' => [
        'email_in_blacklist' => 'El :attribute está en la lista negra. Por favor, utilice otra dirección de correo electrónico.',
        'domain' => 'El :attribute debe ser un dominio válido.',
    ],
    'showing_records' => 'Mostrando :from a :to de :total registros',
];
