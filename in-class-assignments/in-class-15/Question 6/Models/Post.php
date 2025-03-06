<?php

namespace Models;

class Post {
    public function getPosts() {
        return [
            ["title" => "Post 1", 
             "description" => "Selfie",
             "id" => "User1"
            ],
            ["title" => "Post 2",
             "description" => "Vacation",
             "id" => "User2"
            ],
            ["title" => "Post 3",
             "description" => "Meme",
             "id" => "User3"
            ]
        ];
    }
}

?> 
