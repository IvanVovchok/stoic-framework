<?php

require_once __DIR__.'/../vendor/autoload.php';

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$request = Request::createFromGlobals();
$response = new Response();
$routes = new RouteCollection();

$routes->add('hello', new Route('/hello/{name}', ['name' => 'World']));
$routes->add('bye', new Route('/bye'));

$map = [
    '/hello' => 'hello',
    '/bye'   => 'bye',
];

$path = $request->getPathInfo();

if (isset($map[$path])) {
    ob_start();
    extract($request->query->all(), EXTR_SKIP);

    include sprintf(__DIR__.'/../src/pages/%s.php', $map[$path]);

    $response = new Response(ob_get_clean());
} else {
    $response->setStatusCode(404);
    $response->setContent('Not Found');
}

$response->send();