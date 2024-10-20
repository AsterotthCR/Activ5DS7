<?php

namespace Routes;

use App\Controllers\ProductController;
use Lib\Routes;
use App\Controllers\UserController;

Routes::get('/', function(){
<<<<<<< HEAD
    include "../public/views/Home/HomeView.php";
});

Routes::get('/profile', [UserController::class, 'index']);

Routes::get('/register', [UserController::class, 'index']);

Routes::get('/login', [UserController::class, 'index']);

Routes::get('/products', [ProductController::class, 'index']);

Routes::get('/orders', []);
=======
    include __DIR__ . '/../public/views/home.php';
});

Routes::get('/register', function(){
    include __DIR__ . '/../public/views/Register/register.php';
});

Routes::get('/login', function(){
    include __DIR__ . '/../public/views/Login/login.php';
});

Routes::get('/products', function(){
    include __DIR__ . '/../public/views/Products/products.php';
});

Routes::get('/orders', function(){
    include __DIR__ . '/../public/views/Orders/orders.php';
});
>>>>>>> b54152b253ace4e484a50314c2534bf77d4984ec

Routes::get('/orders/:slug', function($slug){
    echo "La orden es: $slug";
});

Routes::dispatch();