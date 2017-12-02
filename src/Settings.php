<?php

namespace Source;

use Config\Parameters;
use Monolog\Logger;

class Settings
{
    private $settings;

    public function __construct()
    {
        $this->settings = [
            'settings' => [
                'displayErrorDetails' => Parameters::SYSTEM['debug'],
                'view' => [
                    'twig' => [
                        'debug' => Parameters::SYSTEM['debug'],
                    ],
                    'path' => __DIR__ . '/../app/Views',
                ],
                'logger' => [
                    'name' => 'APPLICATION',
                    'path' =>  __DIR__ . '/../logs/application.log',
                    'level' => Logger::DEBUG,
                ],
            ],
        ];
    }

    public function load()
    {
        return $this->settings;
    }
}
