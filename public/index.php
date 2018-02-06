<?php

require '../core/bootstrap.php';

$routes = [
    '' => '../app/controllers/index.php',
    'index' => '../app/controllers/index.php',
    'register' => '../app/controllers/register.php',
    'add_user' => '../app/controllers/add_user.php'
];

$uri = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');

if (array_key_exists($uri, $routes)) {
    require $routes[$uri];
} else {
    throw new Exception($uri . ' resource could not be found');
}