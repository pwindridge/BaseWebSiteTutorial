<?php

$routes = [
    '' => '../app/controllers/index.php',
    'register' => '../app/controllers/register.php'
];

$uri = trim($_SERVER['REQUEST_URI'], '/');

if (array_key_exists($uri, $routes)) {
    require $routes[$uri];
} else {
    throw new Exception("URI not found");
}