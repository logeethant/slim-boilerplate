<?php

namespace Source;

use Slim\App;

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
