<?php 

try {

    $expectedCatName = 'Whiskers';
    $actualCatName = 'Pinecone'; 

    if ($actualCatName !== $expectedCatName) {
        throw new Exception("Cat name mismatch: expected {$expectedCatName}, but got {$actualCatName}.");
    }

    echo "Correct!";
} catch (Exception $e) {
    throw new Exception("Meow: " . $e->getMessage());
}

?>