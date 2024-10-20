<?php

namespace Routes;

use Lib\Routes;

Routes::get('/', function(){
    return "esta es la pagina de home";
});

Routes::get('/register', function(){
    return "esta es la pagina de registro de un usuario nuevo";
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