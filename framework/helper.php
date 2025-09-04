<?php

use Symfony\Component\Routing\Route;

if(!function_exists('createRouteClass')) {
    /**
     * Creates and returns a new Route object configured with the specified path and method.
     *
     * @param string $path The path to associate with the route.
     * @param array|string $method The HTTP method(s) to assign to the route.
     * @return Route The created Route instance with the specified configuration.
     */
    function createRouteClass(string $path, array|string $method): Route {
        return (new Route($path))
            ->setMethods($method);
    }
}