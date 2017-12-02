<?php

namespace Source;

use Slim\App;
use Config\Routes;

class Bootstrap
{
    public function __construct()
    {
        session_start();

        $settings = new Settings();
        $app = new App($settings->load());

        new Dependencies($app);
        new Routes($app);

        $app->run();
    }
}
