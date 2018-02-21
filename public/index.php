<?php

require '../core/bootstrap.php';

$routes = [
    '' => '../app/controllers/index.php',
    'index' => '../app/controllers/index.php',
    'register' => '../app/controllers/register.php',
    'add_user' => '../app/controllers/add_user.php'
];

$uri = trim($_SERVER['REQUEST_URI'], '/');

if (array_key_exists($uri, $routes)) {
    require $routes[$uri];
} else {
    throw new Exception($uri . ' resource could not be found');
}