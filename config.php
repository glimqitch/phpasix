<?php

return [
    'database' => [
        'user' => $_ENV['DB_USERNAME'],
        'password' => $_ENV['DB_PASSWORD'],
        'databasetype' => $_ENV['DB_CONNECTION'],
        'name' => $_ENV['DB_DATABASE'],
        'host' => $_ENV['DB_HOST'],
    ]
]
?>