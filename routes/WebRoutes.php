<?php

namespace Routes;

use Lib\Routes;

Routes::get('/', function(){
    return ;
});

Routes::get('/register', function(){
    return [
        'title' => 'home',
        'content' => 'hola mundo desde array'
    ];
});

Routes::get('/login', function(){
    return "Pagina iniciar session";
});

Routes::get('/products', function(){
    return "Pagina productos";
});

Routes::get('/orders', function(){
    return "Pagina ordenes";
});

Routes::get('/orders/:slug', function($slug){
    return "El curso es: $slug";
});

Routes::dispatch();