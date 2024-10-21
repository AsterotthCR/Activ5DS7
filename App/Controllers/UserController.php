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

    public function editProfile($id){
        $user = new User();

        $loggedUser = $user->getById($id);
        
        return $this->view('user.editprofile',compact('loggedUser')); 
    }

    public function updateProfile($id) {
        $user = new User();

        $data = $_POST;

        $user->update($id, $data);

        return $this->redirect("/profile/{$id}");
    }

    public function loginAction() {
        
        $user = new User();
        $data = $_POST;

        if (isset($data['username']) && isset($data['password'])) {
            $username = $data['username'];
            $password = $data['password'];
    
            $authenticatedUser = $user->authenticate($username, $password);

            if ($authenticatedUser != null) {
                return $this->redirect("/profile/{$authenticatedUser['codUser']}");
            } else {
                return $this->redirect("/login");
            }
        } else {
            return $this->redirect("/login");
        }
    }

}