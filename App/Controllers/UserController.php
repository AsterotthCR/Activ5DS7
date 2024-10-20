<?php

namespace App\Controllers;

class UserController extends Controller{
    public function index($route = ''){
        return $this->view('user.login');
    }

    
}