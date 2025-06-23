<?php

namespace Core;

use Core\Track;
use Exception;

class RouteHandler
{
    /**
     * Get a matching url with an existing route
     *
     * @throws Exception
     */
    public static function getMatchUrl($routes, $currentUrl): ?Track
    {
        $result = self::checkRoutes($routes, $currentUrl);
        if (!empty($result)) {
            return $result;
        }

        throw new Exception("There are no routers matching the URL");
    }

    private static function checkRoutes($routes, $currentUrl): ?Track
    {
        $validRoute = '';
        foreach ($routes as  $route) {
            if ($route->path == $currentUrl) {
                $validRoute = $route->path;
                break;
            }
        }

        /** @var object $route */
        return new Track($route->controller, $route->action, $validRoute);
    }
}