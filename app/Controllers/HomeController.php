<?php

namespace App\Controllers;

use Source\Controller;

class HomeController extends Controller
{
    public function index($request, $response, $args)
    {
        return $this->view->render($response, 'Home/index.html.twig');
    }
}
