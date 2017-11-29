<?php

namespace App\Controllers;

class HomeController extends \Source\Controller
{
    public function __invoke($request, $response, $args)
    {
        return $this->view->render($response, 'Home/index.html.twig');
    }
}
