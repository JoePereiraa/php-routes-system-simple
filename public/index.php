<?php

require '../vendor/autoload.php';
require '../routes/router.php';

try {

    $uri = parse_url($_SERVER['REQUEST_URI'])['path'];
    $request = $_SERVER['REQUEST_METHOD'];

    if (!isset($router[$request])) {
        throw new Exception("A rota nao existe");
    }

    if (!array_key_exists($uri, $router[$request])) {
        throw new Exception("A rota nao existe");
    }

    $controller = $router[$request][$uri];
    $controller();
} catch (Exception $e) {
    $e->getMessage();
}
