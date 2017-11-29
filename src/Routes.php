<?php

namespace Source;

use App\Controllers;

class Routes
{
    public function __construct($app)
    {
        $app->get('/', Controllers\HomeController::class);
    }
}
