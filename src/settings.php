<?php

return [
    'settings' => [
        'displayErrorDetails' => \App\Parameters::SYSTEM['debug'],
        'addContentLengthHeader' => false,
        'view' => [
            'twig' => [
                'debug' => \App\Parameters::SYSTEM['debug']
            ],
            'path' => __DIR__ . '/../app/Views'
        ],
        'logger' => [
            'name' => 'APPLICATION',
            'path' => isset($_ENV['docker']) ? 'php://stdout' : __DIR__ . '/../logs/application.log',
            'level' => \Monolog\Logger::DEBUG
        ]
    ]
];
