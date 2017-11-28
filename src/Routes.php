<?php

namespace Source;

class Routes
{
    public function __construct($app)
    {
        $app->get('/', \App\Controllers\HomeController::class);
    }
}
