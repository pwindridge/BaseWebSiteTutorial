<?php

require '../core/bootstrap.php';

use \core\{
    Router, Request
};


try {
    Router::load('../routes.php')
        ->direct(Request::uri(), Request::method());

} catch (Exception $e) {

    if ($e->getMessage() == 'Page not found') {
        require '../app/controllers/pageNotFound.php';
    } elseif ($e->getMessage() == 'Action does not exist') {
        //log action missing
    }
}

