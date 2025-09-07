<?php
declare(strict_types=1);

require_once __DIR__ . '/../vendor/autoload.php';

use Hichxm\Framework;
use Symfony\Component\Dotenv\Dotenv;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Controller\ArgumentResolver;
use Symfony\Component\HttpKernel\Controller\ControllerResolver;
use Symfony\Component\Routing\Matcher\UrlMatcher;
use Symfony\Component\Routing\RequestContext;

if (preg_match('/\.(?:js|css|jpg|png|webp|pdf|woff|woff2|otf|eot|svg|ttf)$/', $_SERVER['REQUEST_URI'])) {
    // serve the requested resource as-is.
    return false;
}

if(file_exists(__DIR__ . '/../.env')) {
    $dotenv = new Dotenv();
    $dotenv->loadEnv(__DIR__ . '/../.env');
}

$request = Request::createFromGlobals();
$routes = include __DIR__ . '/../framework/routes.php';

$context = new RequestContext();
$matcher = new UrlMatcher($routes, $context);

$controllerResolver = new ControllerResolver();
$argumentResolver = new ArgumentResolver();

$framework = new Framework($matcher, $controllerResolver, $argumentResolver);

$response = $framework->handle($request);

$response->send();

