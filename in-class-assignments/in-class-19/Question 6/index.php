<?php

$env = parse_ini_file('/.env');

define('DBHOST', $env['DB_HOST']);
define('DBNAME', $env['DB_NAME']);
define('DBUSER', $env['DB_USER']);
define('DBPASS', $env['DB_PASS']);
define('DBPORT', $env['DB_PORT']);

$pdo = new PDO("mysql:host=" . DBHOST . ";dbname=" . DBNAME, DBUSER, DBPASS);

$request = strtok($_SERVER['REQUEST_URI'], '?');

if ($request === '/posts') {
    $stmt = $pdo->query("SELECT * FROM posts");
    $posts = $stmt->fetchAll(PDO::FETCH_ASSOC);

    header('Content-Type: application/json');
    echo json_encode($posts);
}

?>