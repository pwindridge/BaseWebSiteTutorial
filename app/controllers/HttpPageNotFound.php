<?php

use core\Request;


http_response_code(404);

$data = Request::uri() .' was not found';

require __DIR__ . '/../views/HttpPageNotFound.view.php';