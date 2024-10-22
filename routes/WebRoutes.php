<?php

namespace Routes;
use Lib\Routes;
use App\Controllers\CustomerController;
use App\Controllers\EmployeeController;
use App\Controllers\OfficeController;
use App\Controllers\OrderController;
use App\Controllers\PaymentController;
use App\Controllers\ProductController;
use App\Controllers\ProductLinesController;
use App\Controllers\UserController;
use App\Controllers\OrderDetailsController;


Routes::get('/', function(){
    include "../public/views/Home/HomeView.php";
});


// Users Routes
Routes::get('/profile/:id', [UserController::class, 'profile']);
Routes::get('/profile/:id/edit', [UserController::class, 'editProfile']);
Routes::post('/profile/:id/edit', [UserController::class, 'updateProfile']);
Routes::get('/register', [UserController::class, 'register']);
Routes::post('/register', [UserController::class, 'newUser']);
Routes::get('/login', [UserController::class, 'login']);
Routes::post('/login', [UserController::class, 'loginAction']);

//Office Routes
Routes::get('/office',[OfficeController::class, 'index']);
Routes::get('/office/:id/edit', [OfficeController::class, 'editOffice']);
Routes::post('/office/:id/edit', [OfficeController::class, 'updateOffice']);

// Other Routes
Routes::get('/orders',[OrderController::class, 'index']);
Routes::get('/order/:id',[OrderController::class, 'getOrderDetails']); //exp http://actds7.test/order/10100
Routes::get('/products',[ProductController::class, 'index']);
Routes::get('/products/:line',[ProductController::class, 'findByLine']); //exp http://actds7.test/products/Motorcycles
Routes::get('/customers',[CustomerController::class, 'index']);
Routes::get('/customers/topfive',[CustomerController::class, 'findTopFive']);//exp http://actds7.test/customers/topfive
Routes::get('/customers/noobfive',[CustomerController::class, 'findNoobFive']);//exp http://actds7.test/customers/noobfive
Routes::get('/employees',[EmployeeController::class, 'index']);
Routes::get('/productlines',[ProductLinesController::class, 'index']);
Routes::get('/orderdetails',[OrderDetailsController::class, 'index']); //exp http://actds7.test/orderdetails/grouped
Routes::get('/orderdetails/grouped',[OrderDetailsController::class, 'grupByProducts']);
Routes::get('/payments',[PaymentController::class, 'index']);

Routes::dispatch();