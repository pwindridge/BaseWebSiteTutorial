<?php

$router->get('', '../app/controllers/index.php');
$router->get('index', '../app/controllers/index.php');
$router->get('register', '../app/controllers/register.php');
$router->get('search', '../app/controllers/search.php');

$router->post('add_user', '../app/controllers/add_user.php');
