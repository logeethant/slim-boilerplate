<?php

namespace App\Controllers;

use \App\Models\User;

class HomeController extends \Source\Controller
{
    public function __invoke($request, $response, $args)
    {
        return $this->view->render($response, 'Home/index.html.twig');
    }
}
