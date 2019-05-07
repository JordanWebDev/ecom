<?php

return [


        'driver' => env('MAIL_DRIVER', 'smtp'),


        'host' => env('MAIL_HOST', 'smtp.gmail.com'),


        'port' => env('MAIL_PORT', 2525),


        'from' => ['address' => 'dev.jordn@gmail.com', 'name' => 'Web Developer Jordan'],


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

];
