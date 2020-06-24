<?php

    return [
        'settings' => [
            'displayErrorDetails' => true, // set to false in production
            'addContentLengthHeader' => false, // Allow the web server to send the content-length header

            // Renderer settings
            'renderer' => [
                'template_path' => __DIR__ . '/../templates/',
            ],

            // Monolog settings
            'logger' => [
                'name' => 'slim-app',
                'path' => isset($_ENV['docker']) ? 'php://stdout' : __DIR__ . '/../logs/app.log',
                'level' => \Monolog\Logger::DEBUG,
            ],

            // DB settings
            'db' => [
                'driver'    => 'mysql',
                'host'      => 'localhost',
                'database'  => 'slim',
                'username'  => 'root',
                'password'  => '',
                'charset'   => 'utf8',
                'collation' => 'utf8_unicode_ci',
                'prefix'    => '',
            ],

            // Secrets
            'secretKey' => 'b5f4c79d07062497b98c8b9f6038b451bb9e6d67'
        ],
    ];