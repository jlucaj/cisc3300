<?php

require __DIR__ . '/Controllers/PostsController.php';

use Controllers\PostsController;

$request_uri = $_SERVER['REQUEST_URI'];

if ($request_uri === '/posts') {
    $controller = new PostsController();
    $controller->index();
} else {
    http_response_code(404);
    echo json_encode(["error" => "Not Found"]);
}

?> 