<?php

require '../core/bootstrap.php';

use \core\{
    Router, Request
};

try {
    require Router::load('../routes.php')
        ->direct(Request::uri(), Request::method());
} catch(Exception $e) {
    if($e->getMessage() == 'Resource not found') {
        require '../app/controllers/page_not_found.php';
    }
}