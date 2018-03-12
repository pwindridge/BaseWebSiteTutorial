<?php

$router->get('', 'PagesController@home');
$router->get('index', 'PagesController@home');
$router->get('home', 'PagesController@home');
$router->get('coin-flip', 'PagesController@coinFlip');
$router->get('register', 'AccountController@register');

$router->post('register-details', 'AccountController@registerDetails');
