<?php

namespace App\Controllers;

use Source\Controller;

class HomeController extends Controller
{
    public function __invoke($request, $response, $args)
    {
        return $this->view->render($response, 'Home/index.html.twig');
    }
}
