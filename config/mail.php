<?php

return [


        'driver' => env('MAIL_DRIVER', 'smtp'),


        'host' => env('MAIL_HOST', 'smtp.gmail.com'),


        'port' => env('MAIL_PORT', 587),


        'from' => ['address' => '', 'name' => ''],


        'encryption' => 'tls',


        'username' => env('MAIL_USERNAME'),



        'password' => env('MAIL_PASSWORD'),


        'sendmail' => '/usr/sbin/sendmail -bs',


        'pretend' => false,
        'markdown' => [
            'theme' => 'default',

            'paths' => [
                resource_path('views/vendor/mail'),
            ],
        ],
        'stream' => [
            'ssl' => [
                'allow_self_signed' => true,
                'verify_peer' => false,
                'verify_peer_name' => false,
            ],
        ],

    ];
