<?php

namespace app\Controllers;

use app\Models\Soda;

class SodaController {

    private $model;

    public function __construct() {
        $this->model = new Soda();
    }

    public function getAllSodas() {
        header('Content-Type: application/json');
        echo json_encode($this->model->getAll());
        exit();
    }

    public function searchSodas($flavor) {
        header('Content-Type: application/json');
        echo json_encode($this->model->search($flavor));
        exit();
    }

    public function createSoda($data) {
        header('Content-Type: application/json');
        $result = $this->model->create($data['name'], $data['flavor'], $data['price']);
        echo json_encode(['success' => $result]);
        exit();
    }

    public function deleteSoda($id) {
        header('Content-Type: application/json');
        $result = $this->model->delete($id);
        echo json_encode(['success' => $result]);
        exit();
    }
}
