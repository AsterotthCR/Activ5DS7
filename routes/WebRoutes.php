<?php

namespace Routes;

use App\Controllers\ProductController;
use Lib\Routes;
use App\Controllers\UserController;

Routes::get('/', function(){
    include "../public/views/Home/HomeView.php";
});


// Users Routes
Routes::get('/profile', [UserController::class, 'index']);

Routes::get('/register', [UserController::class, 'index']);

Routes::get('/login', [UserController::class, 'index']);

//Products Routes

Routes::get('/products', [ProductController::class, 'index']);



//Orders Routes
Routes::get('/orders', []);

Routes::get('/orders/:slug', function($slug){
    echo "La orden es: $slug";
});

Routes::dispatch();