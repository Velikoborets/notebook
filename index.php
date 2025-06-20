<?php

namespace app;

use Core\RouteHandler;

require __DIR__ . '/vendor/autoload.php';
$routes = require __DIR__ . '/config/routes.php';


error_reporting(E_ALL);
ini_set('display_errors', 'on');

try {
    $matchUrl = RouteHandler::getMatchUrl($routes, $_SERVER['REQUEST_URI']);
    var_dump($matchUrl);
} catch (\Throwable $th) {
    echo $th->getMessage();
}