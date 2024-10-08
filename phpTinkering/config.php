<?php
//fitxer credencials base dades
return [
    'database' => [
        'user'=>$_ENV['DB_USERNAME'],
        'password'=>$_ENV['DB_PASSWORD'],
        'databasetype' => $_ENV['DB_CONNECTION'],
        'host' => $_ENV['DB_HOST'],
        'port' => $_ENV['DB_PORT'],
        'charset' => $_ENV['DB_CHARSET'],
        'prefix' => $_ENV['DB_PREFIX']
    ]
];

