<?php

use App\Core\Config;

Config::defaults([
        'database' => [
        'name' => 'ogpokedex',
        'username' => 'root',
        'password' => 'root',
        'connection' => 'mysql:host=localhost',
        'options' => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]
    ],
    'stripe' => [
        "secret_key" => "",
        "publishable_key" => ""
    ]
]);

