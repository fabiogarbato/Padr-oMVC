<?php

class Home {
    public function index() {
        $userModel = new User();
        $users = $userModel->getAllUsers(); 
        $data = [
            'users' => $users
        ];

        $this->view('home/index', $data);
    }

    public function view($view, $data = []) {
        extract($data);
        require_once '../app/views/' . $view . '.php';
    }
}
