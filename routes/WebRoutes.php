<?php

namespace Routes;

use Lib\Routes;

Routes::get('/', function(){
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

Routes::get('/orders/:slug', function($slug){
    echo "La orden es: $slug";
});

Routes::dispatch();