<?php

class User {

    public function getAllUsers() {
        $jsonData = file_get_contents('../app/data/users.json');
        return json_decode($jsonData, true);
    }

  
}

