<?php

use Symfony\Component\Routing;

$routes = new Routing\RouteCollection();

$routes->add('welcome', new Routing\Route('/', [
    '_controller' => 'Controllers\WelcomeController::index',
]));

return $routes;