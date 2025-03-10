<?php

return [
    'settings' => [
        'title' => 'Captcha',
        'description' => 'Configuración para Google Captcha',
        'captcha_site_key' => 'Captcha Site Key',
        'captcha_secret' => 'Captcha Secret',
        'enable_captcha' => '¿Habilitar Captcha?',
        'helper' => 'Vaya aquí para obtener credenciales https://www.google.com/recaptcha/admin#list.',
        'hide_badge' => 'Recaptcha oculta (para v3)',
        'type' => 'Tipo',
        'v2_description' => 'V2 (Verificar solicitudes con un desafío)',
        'v3_description' => 'V3 (Verificar solicitudes con una puntuación)',
    ],
    'numbers' => [
        'Zero',
        'One',
        'Two',
        'Three',
        'Four',
        'Five',
        'Six',
        'Seven',
        'Eight',
        'Nine',
        'Ten',
        'Eleven',
        'Twelve',
    ],
    'operands' => [
        '+' => 'plus',
        '-' => 'minus',
        '*' => 'times',
        '/' => 'divided by',
    ],
    'recaptcha_disclaimer_message_with_link' => 'Este sitio está protegido por reCAPTCHA y se aplican las :privacyLink y los :termsLink de Google.',
    'privacy_policy' => 'Política de privacidad',
    'terms_of_service' => 'Términos de servicio',
    'admin_login_form' => 'Admin login form',
    'admin_forgot_password_form' => 'Admin forgot password form',
    'admin_reset_password_form' => 'Admin reset password form',
    'failed_validate' => 'No se pudo validar la captcha.',
];
