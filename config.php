<?php



return [
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
        "secret_key" => "sk_test_BQokikJOvBiI2HlWgH4olfQ2",
        "publishable_key" => "pk_test_6pRNASCoBOKtIshFeQd4XMUh"
    ]

];