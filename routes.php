<?php

<<<<<<< HEAD
$router->get('', '../app/controllers/index.php');
$router->get('index', '../app/controllers/index.php');
$router->get('register', '../app/controllers/register.php');
$router->get('search', '../app/controllers/search.php');

=======
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

>>>>>>> f9b53ea3ef5322b239ae7e513adb87e80394fed3
$router->post('add_user', '../app/controllers/add_user.php');