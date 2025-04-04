<?php

namespace App\Controllers;

use App\Models\Soda;

class SodaController {
    public function searchByFlavor($flavor) {
        header("Content-Type: application/json");
        
        if (!$flavor) {
            echo json_encode(['error' => 'You must provide a soda flavor']);
            exit();
        }
        
        $sodaModel = new Soda();
        $results = $sodaModel->searchByFlavor($flavor);
        
        if ($results) {
            echo json_encode($results);
        } else {
            echo json_encode(['message' => 'No sodas found for that flavor']);
        }
        exit();
    }
}

?>