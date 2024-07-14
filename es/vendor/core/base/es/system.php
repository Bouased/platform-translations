<?php

return [
    'no_select' => 'Seleccione al menos un registro para realizar esta acción.',
    'cannot_find_user' => 'No se puedo encontrar al usuario',
    'supper_revoked' => 'Acceso de superusuario revocado',
    'cannot_revoke_yourself' => '¡No puede revocar el permiso de acceso!',
    'cant_remove_supper' => 'No tienes permiso para eliminar a este superusuario.',
    'cant_find_user_with_email' => 'No se pudo encontrar al usuario con la dirección de correo electrónico',
    'supper_granted' => 'Acceso de superusuario concedido',
    'delete_log_success' => '¡Archivo de registro eliminado exitosamente!',
    'get_member_success' => 'Lista de miembros recuperada exitosamente.',
    'error_occur' => 'Se produjeron los siguientes errores',
    'user_management' => 'Gestión de usuarios',
    'user_management_description' => 'Administrar usuarios',
    'role_and_permission' => 'Roles y Permisos',
    'role_and_permission_description' => 'Gestionar los roles disponibles.',
    'user' => [
        'list_super' => 'Lista de Super Usuarios',
        'email' => 'Correo electrónico',
        'last_login' => 'Último inicio de sesión',
        'username' => 'Nombre de usuario',
        'add_user' => 'Agregar Super Usuario',
        'cancel' => 'Cancelar',
        'create' => 'Crear',
    ],
    'options' => [
        'features' => 'Control de Acceso a Funcionalidades',
        'feature_description' => 'Administrar los disponibles.',
        'manage_super' => 'Gestión de Super Usuarios',
        'manage_super_description' => 'Agregar / eliminar superusuarios.',
        'info' => 'Información del sistema',
        'info_description' => 'Toda la información sobre la configuración actual del sistema.',
    ],
    'info' => [
        'title' => 'Información del sistema',
        'cache' => 'Cache',
        'locale' => 'Configuración regional activa',
        'environment' => 'Entorno',
        'description' => 'Toda la información sobre la configuración actual del sistema.',
    ],
    'disabled_in_demo_mode' => 'No puedes hacerlo en modo de demostración.',
    'report_description' => 'Por favor, comparte esta información para solucionar problemas',
    'get_system_report' => 'Informe del sistema',
    'system_environment' => 'Entorno del sistema',
    'framework_version' => 'Framework Versión',
    'timezone' => 'Zona horaria',
    'debug_mode' => 'Modo de depuración',
    'debug_mode_off' => 'Modo de depuración desactivado',
    'storage_dir_writable' => 'Directorio de almacenamiento escribible',
    'cache_dir_writable' => 'Directorio de caché escribible',
    'app_size' => 'Tamaño de la aplicación',
    'server_environment' => 'Entorno del servidor',
    'php_version' => 'Versión de PHP',
    'php_version_error' => 'PHP debe ser >= :version',
    'server_software' => 'Software del servidor',
    'server_os' => 'Sistema operativo del servidor',
    'database' => 'Base de datos',
    'ssl_installed' => 'SSL Instalado',
    'cache_driver' => 'Controlador de cache',
    'session_driver' => 'Controlador de sesión',
    'queue_connection' => 'Conexión de cola',
    'mbstring_ext' => 'Extensión Mbstring',
    'openssl_ext' => 'Extensión OpenSSL',
    'pdo_ext' => 'Extensión PDO',
    'curl_ext' => 'CURL Ext',
    'exif_ext' => 'Exif Ext',
    'file_info_ext' => 'Información de archivo Ext',
    'tokenizer_ext' => 'Extensión Tokenizer',
    'extra_stats' => 'Estadísticas adicionales',
    'installed_packages' => 'Paquetes instalados y sus números de versión',
    'extra_information' => 'Información Adicional',
    'copy_report' => 'Información de copia',
    'package_name' => 'Nombre del paquete',
    'dependency_name' => 'Nombre de la dependencia',
    'version' => 'Versión',
    'cms_version' => 'Versión',
    'imagick_or_gd_ext' => 'Imagick/GD Ext',
    'updater' => 'Actualizador del sistema',
    'zip' => 'Zip Ext',
    'iconv' => 'Iconv Ext',
    'memory_limit' => 'Límite de memoria',
    'max_execution_time' => 'Tiempo máximo de ejecución (s)',
    'allow_url_fopen_enabled' => 'Habilitada la apertura de URL',
    'cleanup' => [
        'title' => 'Sistema de limpieza',
        'description' => 'Limpiar los datos no utilizados en la base de datos',
        'table' => [
            'name' => 'Nombre de la tabla',
            'count' => 'Registros',
        ],
        'backup_alert' => 'Por favor, haz una copia de seguridad de tu base de datos y archivos de script antes de realizar la limpieza, ya que eliminará los datos de tu base de datos.',
        'messenger_choose_without_table' => 'Por favor, elige ignorar las tablas que no desees limpiar',
        'messenger_confirm_cleanup' => '¿Estás seguro de que quieres realizar la acción de limpieza de la base de datos? Esto eliminará los datos en tu base de datos.',
        'submit_button' => 'Limpieza',
        'success_message' => 'Datos limpiados con éxito',
        'not_enabled_yet' => 'Esta característica aún no está habilitada. <br />Por favor, añade en el archivo .env: <code>CMS_ENABLED_CLEANUP_DATABASE=true</code> para habilitar esta característica.',
    ],
];
