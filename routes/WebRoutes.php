<?php

namespace Routes;

use App\Controllers\ProductController;
use Lib\Routes;
use App\Controllers\UserController;

Routes::get('/', function(){
    include "../public/views/Home/HomeView.php";
});

Routes::get('/profile', [UserController::class, 'index']);

Routes::get('/register', [UserController::class, 'index']);

Routes::get('/login', [UserController::class, 'index']);

Routes::get('/products', [ProductController::class, 'index']);

Routes::get('/orders', []);

Routes::get('/orders/:slug', function($slug){
    return "El curso es: $slug";
});

Routes::dispatch();