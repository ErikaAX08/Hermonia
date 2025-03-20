<?php

return [
    // Configuración básica de la aplicación
    'app' => [
        'name' => 'Hermonia',
        'env' => 'development', // production, testing
        'debug' => true,
        'base_dir' => '/Hermonia/'  // Configurable por cada desarrollador
    ],

    // Configuración de base de datos
    'database' => [
        'host' => 'localhost',
        'port' => '3306',
        'database' => 'hermonia',
        'username' => 'root',
        'password' => ''
    ]
];