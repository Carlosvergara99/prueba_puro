<?php

use Illuminate\Database\Capsule\Manager as Capsule;

return [
'default' => $_ENV['DB_CONNECTION'],
    'connections' => [
        'pgsql' => [
            'driver' => $_ENV['DB_CONNECTION'],
            'host' => $_ENV['DB_HOST'],
            'database' => $_ENV['DB_DATABASE'],
            'username' => $_ENV['DB_USERNAME'],
            'password' => $_ENV['DB_PASSWORD'],
            'charset' => 'utf8',
            'prefix' => '',
            'schema' => 'public',
        ]
    ]
];