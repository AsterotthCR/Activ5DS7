<?php

namespace App\Controllers;

use App\Models\User;

class UserController extends Controller{

    public function index($route = ''){
        
        $userModel = new User();

        return $userModel->update(3, [
            'username'=>'mjones 3',
            'password'=>'jonesPass2024',
            'name'=>'puto',
            'lastname'=>'lo lea'
        ]);

        return $this->view('user.login');

    }

}