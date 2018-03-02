<?php

use \core\Request;

http_response_code(404);

$title = "404 Error: Page not found";
$uri = Request::uri();

require __DIR__ . '/../views/page_not_found.view.php';