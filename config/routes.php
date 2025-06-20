<?php

use Core\Route;

return [
    new Route('/', 'page', 'show1'),
    new Route('/page1/', 'page', 'show1'),
    new Route('/page1/', 'page', 'show1'),
];