<?php

//$router->define([
//    '' => '../app/controllers/index.php',
//    'index' => '../app/controllers/index.php',
//    'register' => '../app/controllers/register.php',
//    'add_user' => '../app/controllers/add_user.php',
//    'search' => '../app/controllers/search.php'
//]);

$router->get('', '../app/controllers/index.php');
$router->get('index', '../app/controllers/index.php');
$router->get('register', '../app/controllers/register.php');
$router->get('search', '../app/controllers.php');

$router->post('add_user', '../app/controllers/add_user.php');