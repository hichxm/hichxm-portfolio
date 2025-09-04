<?php

namespace Hichxm\Http\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class HomeController
{
    public static function home(Request $request, Response $response): Response
    {
        $response->setContent(render_template('layout.twig'));
        $response->setStatusCode(200);

        return $response;
    }
}