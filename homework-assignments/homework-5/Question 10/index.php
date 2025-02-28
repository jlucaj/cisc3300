<?php

header("Content-Type: application/json");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['student_name'];
    $major = $_POST['major']; 
    $grade = $_POST['grade']; 
    $email = $_POST['email'];

    if (!empty($name) && !empty($major) && !empty($grade) && !empty($email)) {
        $response = array("success" => true, "message" => "Sign-up successful for $name!");
    } else {
        $response = array("success" => false, "message" => "Missing required fields.");
    }

    echo json_encode($response);
    exit;
}
?>



