<?php

return [

    /**
     *
     * Traductions partagées.
     *
     */
    'title' => 'تثبيت',
    'next' => 'الخطوة التالية',
    'back' => 'الخطوة السابقة',
    'finish' => 'انتهاء',
    'installation' => 'تثبيت',
    'forms' => [
        'errorTitle' => 'حدثت الأخطاء التالية:',
    ],

    /**
     *
     * Traductions de la page d'accueil.
     *
     */
    'welcome' => [
        'pageTitle' => 'التثبيت - الخطوة 1: مرحباً بكم',
        'title' => 'مرحباً بكم',
        'message' => 'قبل أن نبدأ، نحتاج إلى بعض المعلومات حول قاعدة البيانات. ستحتاج إلى معرفة ما يلي قبل المتابعة.',
        'language' => 'اللغة',
        'next' => 'لننطلق',
    ],

    /**
     *
     * Traductions de la page des prérequis.
     *
     */
    'requirements' => [
        'pageTitle' => 'التثبيت - الخطوة 2: متطلبات السيرفر',
        'title' => 'متطلبات السيرفر',
        'next' => 'التحقق من التراخيص',
    ],

    /**
     *
     * Traductions de la page des autorisations.
     *
     */
    'permissions' => [
        'next' => 'إعداد البيئة',
    ],

    /**
     *
     * Traductions de la page de l'environnement.
     *
     */
    'environment' => [
        'wizard' => [
            'pageTitle' => 'التثبيت - الخطوة 3: إعدادات البيئة',
            'title' => 'إعدادات البيئة',
            'form' => [
                'name_required' => 'اسم البيئة مطلوب.',
                'app_name_label' => 'عنوان الموقع',
                'app_name_placeholder' => 'عنوان الموقع',
                'app_url_label' => 'عنوان الرابط',
                'app_url_placeholder' => 'عنوان الرابط',
                'db_connection_label' => 'الاتصال بقاعدة البيانات',
                'db_connection_label_mysql' => 'MySQL',
                'db_connection_label_sqlite' => 'SQLite',
                'db_connection_label_pgsql' => 'PostgreSQL',
                'db_host_label' => 'مزود قاعدة البيانات',
                'db_host_placeholder' => 'مزود قاعدة البيانات',
                'db_port_label' => 'بوابة قاعدة البيانات',
                'db_port_placeholder' => 'بوابة قاعدة البيانات',
                'db_name_label' => 'اسم قاعدة البيانات',
                'db_name_placeholder' => 'اسم قاعدة البيانات',
                'db_username_label' => 'اسم مستخدم قاعدة البيانات',
                'db_username_placeholder' => 'اسم مستخدم قاعدة البيانات',
                'db_password_label' => 'كلمة مرور قاعدة البيانات',
                'db_password_placeholder' => 'كلمة مرور قاعدة البيانات',
                'buttons' => [
                    'install' => 'التثبيت',
                ],
                'db_host_helper' => 'إذا كنت تستخدم Laravel Sail، ما عليك سوى تغيير DB_HOST إلى DB_HOST=mysql. في بعض المضيفين، قد يكون DB_HOST هو المضيف المحلي بدلاً من 127.0.0.1.',
                'db_connections' => [
                    'mysql' => 'MySQL',
                    'sqlite' => 'SQLite',
                    'pgsql' => 'PostgreSQL',
                ],
            ],
        ],
        'success' => 'تم حفظ معلمات ملف .env الخاص بك.',
        'errors' => 'لا يمكن حفظ ملف .env، يرجى إنشاؤه يدوياً.',
    ],

    /**
     * Page de création de compte.
     */
    'createAccount' => [
        'pageTitle' => 'التثبيت - الخطوة 4: إنشاء حساب - الخطوة 4: إنشاء حساب',
        'title' => 'إنشاء حساب',
        'form' => [
            'first_name' => 'الإسم',
            'last_name' => 'اسم العائلة',
            'username' => 'اسم المستخدم',
            'email' => 'البريد الإلكتروني',
            'password' => 'كلمة المرور',
            'password_confirmation' => 'تأكيد كلمة المرور',
            'create' => 'إنشاء',
        ],
    ],

    /**
     * Page de licence.
     */

    'license' => [
        'pageTitle' => 'التثبيت - الخطوة 5: تفعيل الترخيص',
        'title' => 'تفعيل الترخيص',
        'skip' => 'تجاوز في الوقت الحالي',
    ],

    'install' => 'تثبيت',

    'final' => [
        'pageTitle' => 'تم الانتهاء من التركيب',
        'title' => 'تم الانتهاء',
        'message' => 'تم تثبيت التطبيق بنجاح.',
        'exit' => 'انتقل إلى لوحة تحكم الإدارة',
    ],

    'install_success' => 'تم التثبيت بنجاح!',
];
