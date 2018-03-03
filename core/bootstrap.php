<?php

require '../vendor/autoload.php';


function view($view, $data = [])
{
    extract($data);

    return require __DIR__ . "/../app/views/{$view}.view.php";
}
