<?php

namespace App\Controllers;

use App\Models\User;

class UserController extends Controller{

    public function register(){
        return $this->view('user.register');
    }

    public function login(){
        return $this->view('user.login');
    }

    public function profile($id){

        $user = new User();

        $loggedUser = $user->getById($id);
        
        return $this->view('user.profile',compact('loggedUser'));
    }

    public function newUser(){
        $user = new User();

        $data = $_POST;

        $user->create($data);
        
        return $this->redirect('/login');
    }

}