<?php

namespace app\Models;

use PDO;

class Soda {

    private $conn;

    public function __construct() {
        $this->conn = new PDO(
            "mysql:host=" . DBHOST . ";dbname=" . DBNAME,
            DBUSER,
            DBPASS
        );
    }

    public function getAll() {
        return $this->conn->query("SELECT * FROM JozefsSodaStore")->fetchAll(PDO::FETCH_ASSOC);
    }

    public function search($flavor) {
        $stmt = $this->conn->prepare("SELECT * FROM JozefsSodaStore WHERE flavor LIKE ?");
        $stmt->execute(["%$flavor%"]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function create($name, $flavor, $price) {
        $stmt = $this->conn->prepare("INSERT INTO JozefsSodaStore (name, flavor, price) VALUES (?, ?, ?)");
        return $stmt->execute([$name, $flavor, $price]);
    }

    public function delete($id) {
        $stmt = $this->conn->prepare("DELETE FROM JozefsSodaStore WHERE id=?");
        return $stmt->execute([$id]);
    }
}

