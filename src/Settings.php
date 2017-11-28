<?php

namespace Source;

use \Monolog\Logger;

class Settings
{
    private $settings;

    public function __construct()
    {
        $this->settings = [
            'settings' => [
                'displayErrorDetails' => \Source\Parameters::get('system')['debug'],
                'view' => [
                    'twig' => [
                        'debug' => \Source\Parameters::get('system')['debug']
                    ],
                    'path' => __DIR__ . '/../app/Views'
                ],
                'logger' => [
                    'name' => 'APPLICATION',
                    'path' => isset($_ENV['docker']) ? 'php://stdout' : __DIR__ . '/../logs/application.log',
                    'level' => Logger::DEBUG
                ]
            ]
        ];
    }

    public function load()
    {
        return $this->settings;
    }
}
