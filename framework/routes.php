<?php

use Hichxm\Http\Controller\HomeController;
use Symfony\Component\Routing\RouteCollection;

$routes = new RouteCollection();

$routes->add(
    'home',
    createRouteClass('/', 'GET')
        ->setDefault('_controller', HomeController::class . '::home')
);

return $routes;