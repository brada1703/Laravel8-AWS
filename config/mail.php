<?php

return [

    'default' => array_key_exists('MAIL_MAILER', $_SERVER) ? $_SERVER['MAIL_MAILER'] : env('MAIL_MAILER'),

    'mailers' => [
        'smtp' => [
            'transport' => 'smtp',
            'host' => array_key_exists('MAIL_HOST', $_SERVER) ? $_SERVER['MAIL_HOST'] : env('MAIL_HOST'),
            'port' => array_key_exists('MAIL_PORT', $_SERVER) ? $_SERVER['MAIL_PORT'] : env('MAIL_PORT'),
            'encryption' => array_key_exists('MAIL_ENCRYPTION', $_SERVER) ? $_SERVER['MAIL_ENCRYPTION'] : env('MAIL_ENCRYPTION'),
            'username' => array_key_exists('MAIL_USERNAME', $_SERVER) ? $_SERVER['MAIL_USERNAME'] : env('MAIL_USERNAME'),
            'password' => array_key_exists('MAIL_PASSWORD', $_SERVER) ? $_SERVER['MAIL_PASSWORD'] : env('MAIL_PASSWORD'),
            'timeout' => null,
            'auth_mode' => null,
        ],

        'ses' => [
            'transport' => 'ses',
        ],

        'mailgun' => [
            'transport' => 'mailgun',
        ],

        'postmark' => [
            'transport' => 'postmark',
        ],

        'sendmail' => [
            'transport' => 'sendmail',
            'path' => '/usr/sbin/sendmail -bs',
        ],

        'log' => [
            'transport' => 'log',
            'channel' => env('MAIL_LOG_CHANNEL'),
        ],

        'array' => [
            'transport' => 'array',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Global "From" Address
    |--------------------------------------------------------------------------
    |
    | You may wish for all e-mails sent by your application to be sent from
    | the same address. Here, you may specify a name and address that is
    | used globally for all e-mails that are sent by your application.
    |
    */

    'from' => [
        'address' => env('MAIL_FROM_ADDRESS', 'hello@example.com'),
        'name' => env('MAIL_FROM_NAME', 'Example'),
    ],

    /*
    |--------------------------------------------------------------------------
    | Markdown Mail Settings
    |--------------------------------------------------------------------------
    |
    | If you are using Markdown based email rendering, you may configure your
    | theme and component paths here, allowing you to customize the design
    | of the emails. Or, you may simply stick with the Laravel defaults!
    |
    */

    'markdown' => [
        'theme' => 'default',

        'paths' => [
            resource_path('views/vendor/mail'),
        ],
    ],

];
