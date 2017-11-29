<?php

namespace Source;

use Source\Parameters;
use Monolog\Logger;

class Settings
{
    private $settings;

    public function __construct()
    {
        $this->settings = [
            'settings' => [
                'displayErrorDetails' => Parameters::get('system')['debug'],
                'view' => [
                    'twig' => [
                        'debug' => Parameters::get('system')['debug'],
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
