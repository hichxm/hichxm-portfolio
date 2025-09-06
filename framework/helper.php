<?php

use Symfony\Component\Routing\Route;
use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Error\SyntaxError;
use Twig\Loader\FilesystemLoader;

if (!function_exists('createRouteClass')) {
    /**
     * Creates and returns a new Route object configured with the specified path and method.
     *
     * @param string $path The path to associate with the route.
     * @param array|string $method The HTTP method(s) to assign to the route.
     * @return Route The created Route instance with the specified configuration.
     */
    function createRouteClass(string $path, array|string $method): Route
    {
        return (new Route($path))
            ->setMethods($method);
    }
}

if (!function_exists('render_template')) {

    /**
     * Renders a template using the Twig templating engine and returns the resulting string.
     *
     * @param string $template The name of the template file to render.
     * @param array $data An optional array of key-value pairs to be passed as variables to the template. Default is an empty array.
     * @return string The rendered template content as a string.
     */
    function render_template(string $template, array $data = []): string
    {
        $loader = new FilesystemLoader(__DIR__ . '/../templates');
        $twig = new Environment($loader, isDebugMode() ? [] : [
            'cache' => __DIR__ . '/../cache/twig',
        ]);

        return $twig->render($template, $data);
    }
}

if (!function_exists('isDebugMode')) {
    function isDebugMode(): bool
    {
        return isset($_ENV['APP_DEBUG'])
            && $_ENV['APP_DEBUG'] == 'true';
    }
}