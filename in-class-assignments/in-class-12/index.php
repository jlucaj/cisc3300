<?php
header("Access-Control-Allow-Origin: *");

$uri = strtok($_SERVER["REQUEST_URI"], '?');

$uriArray = explode("/", $uri);

if (isset($uriArray[1]) && $uriArray[1] === 'html' && $_SERVER['REQUEST_METHOD'] === 'GET') {
    echo '<!DOCTYPE html>
    <html>
      <head>
        <title>HTML Page</title>
      </head>
      <body>
        <p>This is a simple HTML response.</p>
      </body>
    </html>';
    exit();
}

if (isset($uriArray[1]) && $uriArray[1] === 'json' && $_SERVER['REQUEST_METHOD'] === 'GET') {
    $data = [
        "message" => "This is a simple JSON response!",
        "status"  => "OK"
    ];
    echo json_encode($data);
    exit();
}
