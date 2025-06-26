<?php

namespace app;

use Core\Dispatcher;
use Core\RouteHandler;

require __DIR__ . '/vendor/autoload.php';

error_reporting(E_ALL);
ini_set('display_errors', 'on');

try {
    $routes = require __DIR__ . '/config/routes.php';
    $matchUrl = RouteHandler::getMatchUrl($routes, $_SERVER['REQUEST_URI']);
    $page = (new Dispatcher())->getPage($matchUrl);
} catch (\Throwable $th) {
    echo $th->getMessage();
}