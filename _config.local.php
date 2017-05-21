<?php

use App\Core\Config;

Config::local([
    'database' => [
        'dbname' => 'ogdatabase',
        'user' => 'root',
        'password' => 'root',
        'host' => 'localhost',
        'unix_socket' => '/Applications/MAMP/tmp/mysql/mysql.sock',
        'driver' => 'pdo_mysql'
    ],
    'stripe' => [
        "secret_key" => "sk_test_3cvqLoOKJ2DI81VihJmbumIn",
        "publishable_key" => "pk_test_35GapMPXRhIFTzhPfeUK0fcs"
    ]
]);

