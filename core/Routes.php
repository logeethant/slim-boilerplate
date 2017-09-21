<?php

namespace Core;

class Routes
{
    public function __construct($app)
    {
        //$app->get('/', \App\Controllers\HomeController::class . ':home')->setName('home');
        $app->get('/', \App\Controllers\HomeController::class);
    }
}
