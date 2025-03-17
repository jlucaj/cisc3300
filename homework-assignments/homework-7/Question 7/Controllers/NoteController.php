<?php

class NoteController {
    public function create() {
        $data = [
            'title'           => '',
            'description'     => '',
            'successMessage'  => '',
            'errorMessage'    => ''
        ];
            
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $title = isset($_POST['title']) ? trim($_POST['title']) : '';
            $description = isset($_POST['description']) ? trim($_POST['description']) : '';
            
            // convert special chars to html entities
            $titleHTML = htmlentities($title);
            $descriptionHTML = htmlentities($description);

            $data['title'] = $titleHTML;
            $data['description'] = $descriptionHTML;

            // error checking
            if (strlen($titleHTML) <= 3) {
                $data['errorMessage'] = "Title must be more than 3 characters long.";
            } elseif (strlen($descriptionHTML) <= 10) {
                $data['errorMessage'] = "Description must be more than 10 characters long.";
            } else {
                $data['successMessage'] = "Note submitted successfully.";
            }
            
            header('Content-Type: application/json');
            echo json_encode($data);
            
            exit();
        }

        require 'Views/NoteView.html';
    }
}

?>
