<?php

use App\Core\Config;

Config::local([
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
        "secret_key" => "sk_test_3cvqLoOKJ2DI81VihJmbumIn",
        "publishable_key" => "pk_test_35GapMPXRhIFTzhPfeUK0fcs"
    ]
]);

