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

    if (isset($data['user']) && isset($data['password'])) {
        $username = $data['user'];
        $password = $data['password'];

        // Autenticar al usuario
        $authenticatedUser = $user->authenticate($username, $password);

        if ($authenticatedUser != null) {
            // Iniciar sesión
            session_start();
            $_SESSION['user_id'] = $authenticatedUser['codUser'];
            $_SESSION['name'] = $authenticatedUser['name'];
            $_SESSION['lastname'] = $authenticatedUser['lastname'];
            $_SESSION['username'] = $authenticatedUser['user'];

            // Redirigir a la página de inicio
            return $this->redirect("/");
        } else {
            // Si falló el login, establecer una variable en la sesión para mostrar el modal de error
            session_start();
            $_SESSION['login_error'] = true;
            return $this->redirect("/login");
        }
    } else {
        return $this->redirect("/login");
    }
}


    public function logout() {
        session_start();
        session_destroy();
        return $this->redirect("/login");
    }

}