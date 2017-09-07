<?php

$container = $app->getContainer();

$container['view'] = function ($container) {
    $twig = new \Slim\Views\Twig($container->settings['view']['path'], $container->settings['view']['twig']);
    $twig->addExtension(new \Slim\Views\TwigExtension($container->router, $container->request->getUri()));
    $twig->addExtension(new \Twig_Extension_Debug());
    return $twig;
};

$container['logger'] = function ($container) {
    $logger = new \Monolog\Logger($container->settings['logger']['name']);
    $logger->pushProcessor(new \Monolog\Processor\UidProcessor());
    $logger->pushHandler(new \Monolog\Handler\StreamHandler($container->settings['logger']['path'], $container->settings['logger']['level']));
    return $logger;
};
