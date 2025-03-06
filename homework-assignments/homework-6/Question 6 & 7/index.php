<?php

$town = [ 
    "name" => "Eastchester",
    "county" => "Westchester",
    "state" => "New York", 
    "country" => "United States of America", 
    "zip" => 10709
]; 

foreach ($town as $key => $value) {
    echo "{$key}: {$value}\n"; 
}

function welcome(string $city, string $country = ""): string {
    return "Welcome to $city" . ($country ? ", $country" : "") . "!"; 
} 

echo welcome("Bronxville"); 
echo "\n"; 
echo welcome("Tuckahoe", $town["country"]); 
echo "\n"; 
echo welcome($town["name"], $town["country"]); 

?> 
