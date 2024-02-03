<?php

class Home {
    public function index() {
        $userModel = new User();
        $user = $userModel->findUserById(1); 

        $data = [
            'user' => $user
        ];

        $this->view('home/index', $data);
    }

    public function view($view, $data = []) {
        extract($data);
        require_once '../app/views/' . $view . '.php';
    }
}
