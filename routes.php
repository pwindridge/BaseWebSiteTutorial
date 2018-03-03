<?php

$router->get('', 'PagesController@home');
$router->get('index', 'PagesController@home');
$router->get('register', 'UsersController@register');
$router->get('search', 'UsersController@search');

$router->post('add_user', 'UsersController@store');
