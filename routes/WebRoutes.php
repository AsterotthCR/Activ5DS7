<?php

namespace Routes;

use App\Controllers\ProductController;
use Lib\Routes;
use App\Controllers\UserController;

Routes::get('/', function(){
    include "../public/views/Home/HomeView.php";
});


// Users Routes
Routes::get('/profile/:id', [UserController::class, 'profile']);

Routes::get('/register', [UserController::class, 'register']);
Routes::post('/register', [UserController::class, 'newUser']);

Routes::get('/login', [UserController::class, 'login']);

//Products Routes

Routes::get('/products', [ProductController::class, 'index']);



//Orders Routes
Routes::get('/orders', []);

Routes::get('/orders/:slug', function($slug){
    echo "La orden es: $slug";
});

Routes::dispatch();