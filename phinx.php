<?php
require __DIR__ . '/vendor/autoload.php';
$db = include __DIR__ . '/config/db.php';

return [
    'paths' => [
        'migrations' => [
            __DIR__ . '/database/migrations'
        ],
        'seeds' => [
            __DIR__ . '/database/seeds'
        ]
    ],
    'environments' => [
        'default_migration_table' => 'migrations',
        'default_database' => 'development',
        'development' => [
            'adapter' => $db['development']['driver'],
            'host' => $db['development']['host'],
            'name' => $db['development']['name'],
            'user' => $db['development']['username'],
            'pass' => $db['development']['password'],
            'charset' => $db['development']['charset'],
            'collation' => $db['development']['collation']
        ]
    ]
];