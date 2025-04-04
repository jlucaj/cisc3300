<?php

require __DIR__ . '/app/Controllers/SodaController.php';
require __DIR__ . '/app/Models/Soda.php';

$action = isset($_GET['action']) ? $_GET['action'] : '';

if ($action === 'search') {
    $flavor = isset($_GET['flavor']) ? $_GET['flavor'] : '';
    $controller = new App\Controllers\SodaController();
    $controller->searchByFlavor($flavor);
    exit();
}

require __DIR__ . '/app/views/SodaWebStore.html';

?>
