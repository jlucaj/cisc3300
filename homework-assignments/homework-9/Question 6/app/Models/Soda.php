<?php

namespace App\Models;

use PDO;

class Soda {
    private $pdo;

    public function __construct() {
        $env = parse_ini_file(__DIR__ . '/../../.env');
        $dsn = "mysql:host={$env['DB_HOST']};dbname={$env['DB_NAME']};";
        $this->pdo = new PDO($dsn, $env['DB_USER'], $env['DB_PASS']);
    }

    public function searchByFlavor($flavor) {
        $query = "SELECT * FROM JozefsSodaStore WHERE flavor LIKE ?";
        $stmt = $this->pdo->prepare($query);
        $check = $stmt->execute(["%$flavor%"]);
        if ($check) {
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            if (is_array($result) && count($result)) {
                return $result;
            }
        }
        return false;
    }
}

?>

