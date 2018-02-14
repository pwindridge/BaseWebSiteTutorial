<?php

$router->define([
    '' => '../app/controllers/index.php',
    'index' => '../app/controllers/index.php',
    'register' => '../app/controllers/register.php',
    'add_user' => '../app/controllers/add_user.php',
    'search' => '../app/controllers/search.php'
]);

//$route->get('', '../app/controllers/index.php');
//$route->get('index', '../app/controllers/index.php');
//$route->get('register', '../app/controllers/register.php');
//$route->post('add_user', '../app/controllers/add_user.php');