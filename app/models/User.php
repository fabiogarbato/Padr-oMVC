<?php

class User {

    public function findUserById($id) {

        $jsonData = file_get_contents('../app/data/users.json');
        $users = json_decode($jsonData, true);

        foreach ($users as $user) {
            if ($user['id'] == $id) {
                return $user;
            }
        }

        return null;
    }
}

