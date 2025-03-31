<?php

namespace app\models\Model;

class Post extends Model {

    public function getAllPosts() {
        $query = "select * from posts";
        return $this->query($query);
    }

    public function getPostById($id) {
        $query = "select * from posts where id = :id";
        return $this->query($query, ['id' => $id]);
    }

    public function savePost($inputData) {
        $query = "insert into posts (title, content) values (:title, :content)";
        return $this->query($query, $inputData);
    }

    public function updatePost($inputData) {
        $query = "update posts set title = :title, content = :content WHERE id = :id";
        return $this->query($query, $inputData);
    }

    public function deletePost($inputData) {
        $query = "DELETE FROM posts where id = :id";
        return $this->query($query, $inputData);
    }
}

?> 