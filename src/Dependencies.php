<?php

namespace Source;

use Slim\Views\Twig;
use Slim\Views\TwigExtension;
use Twig_Extension_Debug;
use Monolog\Logger;
use Monolog\Processor\UidProcessor;
use Monolog\Handler\StreamHandler;

class Dependencies
{
    public function __construct($app)
    {
        $container = $app->getContainer();

        $container['view'] = function ($container) {
            $twig = new Twig($container->settings['view']['path'], $container->settings['view']['twig']);
            $twig->addExtension(new TwigExtension($container->router, $container->request->getUri()));
            $twig->addExtension(new Twig_Extension_Debug());
            return $twig;
        };

        $container['logger'] = function ($container) {
            $logger = new Logger($container->settings['logger']['name']);
            $logger->pushProcessor(new UidProcessor());
            $logger->pushHandler(new StreamHandler($container->settings['logger']['path'], $container->settings['logger']['level']));
            return $logger;
        };
    }
}
