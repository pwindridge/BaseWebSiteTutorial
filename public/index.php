<?php

require '../core/bootstrap.php';

use \core\{
    Router, Request
};

try {
    require Router::load('../routes.php')
        ->direct(Request::uri());
} catch(Exception $e) {

}