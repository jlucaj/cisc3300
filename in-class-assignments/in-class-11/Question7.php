<?php 

header('Content-Type: application/json');

$response = [
    "name" => "Jozef",
    "grade" => "Senior",
    "age" => "21",
    "timestamp" => date("Y-m-d H:i:s")
];

header('Content-Type: application/json');
echo json_encode($response);
?>