<?php

return [
    'title' => 'Settings',
    'general_setting' => 'General Settings',
    'menu' => 'All Settings',
    'email_setting_title' => 'Ajustes de correo electrónico',
    'email_setting_description' => 'Configure email settings',
    'general' => [
        'theme' => 'Theme',
        'description' => 'Configuración de la información del sitio',
        'title' => 'General',
        'general_block' => 'General Information',
        'rich_editor' => 'Rich Editor',
        'site_title' => 'Site title',
        'admin_email' => 'Correo electrónico de administrador',
        'seo_block' => 'SEO Configuration',
        'seo_title' => 'SEO Title',
        'seo_description' => 'SEO Description',
        'webmaster_tools_block' => 'Google Webmaster Tools',
        'google_site_verification' => 'Google site verification',
        'placeholder' => [
            'site_title' => 'Site Title (maximum 120 characters)',
            'admin_email' => 'Correo electrónico de administrador',
            'seo_title' => 'SEO Title (maximum 120 characters)',
            'seo_description' => 'SEO Description (maximum 120 characters)',
            'google_analytics' => 'Google Analytics',
            'google_site_verification' => 'Google Site Verification',
        ],
        'cache_admin_menu' => 'Cache admin menu?',
        'enable_send_error_reporting_via_email' => '¿Activar el envío de informes de errores por correo electrónico?',
        'time_zone' => 'Zona horaria',
        'default_admin_theme' => 'Default admin theme',
        'enable_change_admin_theme' => 'Enable change admin theme?',
        'enable' => 'Enable',
        'disable' => 'Disable',
        'enable_cache' => 'Enable cache?',
        'cache_time' => 'Cache time (minutes)',
        'cache_time_site_map' => 'Cache Time Site map',
        'admin_logo' => 'Admin logo',
        'admin_favicon' => 'Admin favicon',
        'admin_title' => 'Admin title',
        'admin_title_placeholder' => 'Title show to tab of browser',
        'cache_block' => 'Cache',
        'admin_appearance_title' => 'Admin appearance',
        'admin_appearance_description' => 'Setting admin appearance such as editor, language...',
        'seo_block_description' => 'Setting site title, site meta description, site keyword for optimize SEO',
        'webmaster_tools_description' => 'Google Webmaster Tools (GWT) is free software that helps you manage the technical side of your website',
        'cache_description' => 'Config cache for system for optimize speed',
        'yes' => 'Yes',
        'no' => 'No',
        'show_on_front' => 'Your homepage displays',
        'select' => '— Select —',
        'show_site_name' => 'Show site name after page title, separate with "-"?',
        'locale' => 'Idioma del sitio',
        'locale_direction' => 'Dirección del idioma',
        'admin_login_screen_backgrounds' => 'Login screen backgrounds (~1366x768)',
        'redirect_404_to_homepage' => '¿Redirigir todas las solicitudes no encontradas a la página de inicio?',
    ],
    'admin_appearance' => [
        'title' => 'Apariencia del administrador',
        'description' => 'Ver y actualizar el logotipo, favicon, diseño,...',
        'layout' => 'Layout',
        'horizontal' => 'Horizontal',
        'vertical' => 'Vertical',
        'show_menu_item_icon' => 'Show menu item icon?',
        'language' => 'Language in admin panel',
        'theme_mode' => 'Theme mode',
        'dark' => 'Dark',
        'light' => 'Light',
        'container_width' => [
            'title' => 'Container width',
            'default' => 'Default',
            'large' => 'Large',
            'full' => 'Full',
        ],
        'form' => [
            'admin_logo' => 'Admin logo',
            'admin_favicon' => 'Admin favicon',
            'admin_title' => 'Admin title',
            'admin_title_placeholder' => 'Title show to tab of browser',
            'admin_login_screen_backgrounds' => 'Login screen backgrounds (~1366x768)',
            'admin_locale_direction' => 'Admin language direction',
            'rich_editor' => 'Rich Editor',
            'show_admin_bar' => 'Show admin bar (When admin logged in, still show admin bar in website)?',
            'show_guidelines' => 'Show guidelines?',
            'primary_font' => 'Primary font',
            'primary_color' => 'Primary color',
            'secondary_color' => 'Secondary color',
            'heading_color' => 'Heading color',
            'text_color' => 'Text color',
            'link_color' => 'Link color',
            'link_hover_color' => 'Link hover color',
            'show_menu_item_icon' => 'Show menu item icon?',
            'custom_css' => 'Custom CSS',
            'custom_js' => 'Custom JS',
            'custom_header_js' => 'Header JS',
            'custom_header_js_placeholder' => 'JS in header of page, wrap it inside &#x3C;script&#x3E;&#x3C;/script&#x3E;',
            'custom_body_js' => 'Body JS',
            'custom_body_js_placeholder' => 'JS in body of page, wrap it inside &#x3C;script&#x3E;&#x3C;/script&#x3E;',
            'custom_footer_js' => 'Footer JS',
            'custom_footer_js_placeholder' => 'JS in footer of page, wrap it inside &#x3C;script&#x3E;&#x3C;/script&#x3E;',
        ],
    ],
    'datatable' => [
        'title' => 'Tablas de datos',
        'description' => 'Ajustes para tablas de datos',
        'form' => [
            'show_column_visibility' => 'Default show column visibility?',
            'show_export_button' => 'Default show export button?',
            'pagination_type' => 'Pagination type',
            'default' => 'Default',
            'dropdown' => 'Dropdown',
        ],
    ],
    'email' => [
        'subject' => 'Subject',
        'content' => 'Content',
        'title' => 'Setting for email template',
        'description' => 'Plantilla de correo electrónico utilizando HTML y variables del sistema.',
        'reset_to_default' => 'Reset to default',
        'back' => 'Back to settings',
        'reset_success' => 'Reset back to default successfully',
        'confirm_reset' => 'Confirm reset email template?',
        'confirm_message' => 'Do you really want to reset this email template to default?',
        'continue' => 'Continue',
        'sender_name' => 'Sender name',
        'sender_name_placeholder' => 'Name',
        'sender_email' => 'Sender email',
        'mailer' => 'Mailer',
        'port' => 'Port',
        'port_placeholder' => 'Ex: 587',
        'host' => 'Host',
        'host_placeholder' => 'Ex: smtp.gmail.com',
        'username' => 'Username',
        'username_placeholder' => 'Username to login to mail server',
        'password' => 'Password',
        'password_placeholder' => 'Password to login to mail server',
        'encryption' => 'Encryption',
        'mail_gun_domain' => 'Domain',
        'mail_gun_domain_placeholder' => 'Domain',
        'mail_gun_secret' => 'Secret',
        'mail_gun_secret_placeholder' => 'Secret',
        'mail_gun_endpoint' => 'Endpoint',
        'mail_gun_endpoint_placeholder' => 'Endpoint',
        'log_channel' => 'Log channel',
        'sendmail_path' => 'Sendmail Path',
        'encryption_placeholder' => 'Encryption: ssl or tls',
        'ses_key' => 'Key',
        'ses_key_placeholder' => 'Key',
        'ses_secret' => 'Secret',
        'ses_secret_placeholder' => 'Secret',
        'ses_region' => 'Region',
        'ses_region_placeholder' => 'Region',
        'postmark_token' => 'Token',
        'postmark_token_placeholder' => 'Token',
        'template_title' => 'Email templates',
        'template_description' => 'Base templates for all emails',
        'template_header' => 'Encabezado de la plantilla de correo electrónico',
        'template_header_description' => 'Template for header of emails',
        'template_footer' => 'Pie de página de la plantilla de correo electrónico',
        'template_footer_description' => 'Template for footer of emails',
        'default' => 'Default',
        'using_queue_to_send_mail' => 'Using queue job to send emails (Must to setup Queue first https://laravel.com/docs/queues#supervisor-configuration)',
        'email_templates' => 'Plantillas de correo electrónico',
        'email_templates_description' => 'Plantilla de correo electrónico utilizando HTML y variables del sistema.',
        'email_template_settings' => 'Ajustes de plantillas de correo electrónico',
        'email_rules' => 'Reglas de correo electrónico',
        'blacklist_email_domains' => 'Dominios de correo electrónico en lista negra',
        'blacklist_specified_emails' => 'Direcciones de correo electrónico en lista negra',
        'exception_emails' => 'Correos electrónicos de excepción',
        'email_rules_strict' => 'Validación estricta de correos electrónicos',
        'email_template_status' => 'Estatus de la plantilla de correo electrónico',
        'email_template_email_contact_helper_text' => 'Si no se establece, se obtendrá del correo electrónico del remitente en Administrador -> Configuración -> Correo electrónico.',
        'email_template_custom_css' => 'CSS personalizado de la plantilla de correo electrónico',
        'blacklist_email_domains_helper' => 'Ingresa una lista de dominios de correo electrónico para ser incluidos en la lista negra. Por ejemplo, gmail.com, yahoo.com.',
        'blacklist_specified_emails_helper' => 'Ingrese una lista de direcciones de correo electrónico específicas para ser incluidas en la lista negra. Por ejemplo, mail@example.com.',
        'email_rules_description' => 'Configurar reglas de correo electrónico para validación.',
        'exception_emails_helper' => 'Estos correos electrónicos serán excluidos de las reglas de validación.',
        'email_rules_strict_helper' => 'Realizar una validación de correo electrónico similar a RFC con reglas estrictas.',
        'email_rules_dns' => 'Validación de comprobación DNS',
        'email_rules_dns_helper' => 'Comprobar si existen registros DNS que indiquen que el servidor acepta correos electrónicos.',
        'email_rules_spoof_helper' => 'Detectar posibles intentos de suplantación de correo electrónico.',
        'email_rules_spoof' => 'Detección de suplantación',
    ],
    'media' => [
        'title' => 'Media',
        'driver' => 'Driver',
        'description' => 'Settings for media',
        'aws_access_key_id' => 'AWS Access Key ID',
        'aws_secret_key' => 'AWS Secret Key',
        'aws_default_region' => 'AWS Default Region',
        'aws_bucket' => 'AWS Bucket',
        'aws_url' => 'AWS URL',
        'do_spaces_access_key_id' => 'DO Spaces Access Key ID',
        'do_spaces_secret_key' => 'DO Spaces Secret Key',
        'do_spaces_default_region' => 'DO Spaces Default Region',
        'do_spaces_bucket' => 'DO Spaces Bucket',
        'do_spaces_endpoint' => 'DO Spaces Endpoint',
        'do_spaces_cdn_enabled' => 'Is DO Spaces CDN enabled?',
        'media_do_spaces_cdn_custom_domain' => 'Do Spaces CDN custom domain',
        'media_do_spaces_cdn_custom_domain_placeholder' => 'https://your-custom-domain.com',
        'enable_chunk' => 'Enable chunk size upload?',
        'chunk_size' => 'Chunk size (Bytes)',
        'chunk_size_placeholder' => 'Default: 1048576 ~ 1MB',
        'max_file_size' => 'Chunk max file size (MB)',
        'max_file_size_placeholder' => 'Default: 1048576 ~ 1GB',
        'enable_watermark' => 'Enable watermark?',
        'watermark_source' => 'Watermark image',
        'watermark_size' => 'Size of watermark (%)',
        'watermark_size_placeholder' => 'Default: 10 (%)',
        'watermark_opacity' => 'Watermark Opacity (%)',
        'watermark_opacity_placeholder' => 'Default: 70 (%)',
        'watermark_position' => 'Watermark position',
        'watermark_position_x' => 'Watermark position X',
        'watermark_position_y' => 'Watermark position Y',
        'watermark_position_top_left' => 'Top left',
        'watermark_position_top_right' => 'Top right',
        'watermark_position_bottom_left' => 'Bottom left',
        'watermark_position_bottom_right' => 'Bottom right',
        'watermark_position_center' => 'Center',
        'default_placeholder_image' => 'Imagen de marcador de posición predeterminada',
    ],
    'license' => [
        'purchase_code' => 'Purchase code',
        'buyer' => 'Buyer',
    ],
    'field_type_not_exists' => 'This field type does not exist',
    'save_settings' => 'Guardar ajustes',
    'template' => 'Template',
    'description' => 'Description',
    'enable' => 'Enable',
    'send' => 'Send',
    'test_email_description' => 'To send test email, please make sure you are updated configuration to send mail!',
    'test_email_input_placeholder' => 'Enter the email which you want to send test email.',
    'test_email_modal_title' => 'Send a test email',
    'test_send_mail' => 'Send test mail',
    'test_email_send_success' => '¡Correo electrónico enviado correctamente!',
    'locale_direction_ltr' => 'De izquierda a derecha',
    'locale_direction_rtl' => 'De derecha a izquierda',
    'emails_warning' => 'Puedes agregar un máximo de :count correos electrónicos.',
    'email_add_more' => 'Añadir más',
    'generate' => 'Generate',
    'generate_thumbnails' => 'Generate thumbnails',
    'generate_thumbnails_success' => 'Generate thumbnails successfully. :count files are generated!',
    'generate_thumbnails_error' => 'We are unable to regenerate thumbnail for these files :count files!',
    'generate_thumbnails_description' => 'Are you sure you want to re-generate thumbnails for all images? It will take time so please DO NOT leave this page, wait until it is finished.',
    'enable_chunk_description' => 'Chunk size upload is used to upload large file size.',
    'watermark_description' => 'WARNING: Watermark is just added to new uploaded images, it won\'t be added to existing images. Disable watermark won\'t remove watermark from existing images.',
    'submit' => 'Submit',
    'back' => 'Back',
    'enter_sample_value' => 'Enter sample values for testing',
    'preview' => 'Preview',
    'media_size_width' => ':size size width must be greater than 0',
    'media_size_height' => ':size size height must be greater than 0',
    'cronjob' => [
        'name' => 'Cronjob',
        'description' => 'Cronjob allow you to automate certain commands or scripts on your site.',
        'is_not_ready' => 'To run the cronjob, follow the instructions below.',
        'is_working' => 'Congratulations! Your cronjob is running.',
        'is_not_working' => 'Your cronjob is not running. Please check your server\'s cronjob.',
        'last_checked' => 'Last checked at :time.',
        'copy_button' => 'Copy',
        'setup' => [
            'name' => 'Setting up the Cronjob',
            'connect_to_server' => 'Connect to your server via SSH or any preferred method.',
            'open_crontab' => 'Open the crontab file using a text editor (e.g., `crontab -e`).',
            'add_cronjob' => 'Add the above command to the crontab file and save it.',
            'done' => 'The cronjob will now run at every minute and execute the specified command.',
            'learn_more' => 'You can learn more about cronjob from the Laravel :documentation',
            'documentation' => 'documentation',
            'copied' => 'Copied',
        ],
    ],
    'cache' => [
        'title' => 'Cache',
        'description' => 'Configurar la caché del sistema para optimizar la velocidad.',
        'form' => [
            'enable_cache' => 'Enable cache?',
            'cache_time' => 'Cache time (minutes)',
            'disable_cache_in_the_admin_panel' => 'Disable cache in the admin panel?',
            'cache_admin_menu' => 'Cache admin menu?',
            'enable_cache_site_map' => 'Enable cache site map?',
            'cache_time_site_map' => 'Cache Time Site map (minutes)',
        ],
    ],
    'appearance' => [
        'title' => 'Appearance',
    ],
    'panel' => [
        'email' => 'Correo electrónico',
        'common' => 'Común',
        'others' => 'Otros',
        'general_description' => 'Ver y actualizar tus ajustes generales y activar la licencia.',
        'email_description' => 'Ver y actualizar tus ajustes de correo electrónico y plantillas de correo electrónico.',
        'media_description' => 'Ver y actualizar tus ajustes de medios.',
    ],
    'saving' => 'Guardando...',
    'generating_media_thumbnails' => 'Generating media thumbnails...',
    'website_tracking' => [
        'title' => 'Website Tracking',
        'description' => 'Configure website tracking',
        'google_tag_id' => 'Google tag ID',
        'google_tag_id_placeholder' => 'Example: G-123ABC4567',
        'google_tag_code' => 'Google tag code',
    ],
];