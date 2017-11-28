<?php

namespace Source;

class Bootstrap
{
    public function __construct()
    {
        session_start();

        $settings = new \Source\Settings();
        $app = new \Slim\App($settings->load());

        new \Source\Dependencies($app);
        new \Source\Routes($app);

        $app->run();
    }
}
