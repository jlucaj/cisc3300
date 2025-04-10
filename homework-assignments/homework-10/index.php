<?php

$env = parse_ini_file('.env');

define('DBHOST', $env['DB_HOST']);
define('DBNAME', $env['DB_NAME']);
define('DBUSER', $env['DB_USER']);
define('DBPASS', $env['DB_PASS']);

require 'app/Models/Soda.php';
require 'app/Controllers/SodaController.php';

use app\Controllers\SodaController;

$uri = strtok($_SERVER["REQUEST_URI"], '?');
$method = $_SERVER['REQUEST_METHOD'];
$action = $_GET['action'] ?? '';

$sodaController = new SodaController();

if ($uri === '/' && $method === 'GET') {
    require 'app/Views/SodaWebStore.html';
    exit();
}

if ($uri === '/sodas' && $method === 'GET' && $action === 'all') {
    $sodaController->getAllSodas();
}

if ($uri === '/sodas' && $method === 'GET' && $action === 'search') {
    $flavor = $_GET['flavor'] ?? '';
    $sodaController->searchSodas($flavor);
}

if ($uri === '/sodas' && $method === 'POST' && $action === 'create') {
    $data = json_decode(file_get_contents('php://input'), true);
    $sodaController->createSoda($data);
}

if ($uri === '/sodas' && $method === 'POST' && $action === 'delete') {
    $data = json_decode(file_get_contents('php://input'), true);
    $sodaController->deleteSoda($data['id']);
}

exit();
