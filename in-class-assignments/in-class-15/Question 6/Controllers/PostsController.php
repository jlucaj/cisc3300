<?php

namespace Controllers;

require __DIR__ . '/../Models/Post.php';

use Models\Post;

class PostsController {
    public function index() {
        $postModel = new Post();
        header('Content-Type: application/json');
        echo json_encode($postModel->getPosts());
    }
}

?> 