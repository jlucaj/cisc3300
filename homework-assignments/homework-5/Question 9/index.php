<?php
header("Access-Control-Allow-Origin: *");

$uri = strtok($_SERVER["REQUEST_URI"], '?');

$uriArray = explode("/", $uri);

if ($uriArray[1] === 'products' && $_SERVER['REQUEST_METHOD'] === 'GET') {
    $products = [
        [
            'name' => 'Coca Cola',
            'inventory' => 100,
            'price' => 1
        ],
        [
            'name' => 'Pepsi', 
            'inventory' => 75, 
            'price' => 1
        ],
        [
            'name' => 'Dr. Pepper',
            'inventory' => 125,
            'price' => 1.25 
        ]
    ];

    echo json_encode($products);
    exit();
}

?>
