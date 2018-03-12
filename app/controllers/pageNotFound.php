<?php

$title = "Error Page";
$error = 'The page &lt;' . \core\Request::uri() . '&gt; was not found.';

http_response_code(404);

require __DIR__ . '/../views/error.view.php';
