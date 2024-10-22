<?php

namespace App\Controllers;

use App\Models\Order;

class OrderController extends Controller{
    public function index(){
        $order = new Order();        
        
        $allorders = $order->getAll();
        
        return $allorders;
    }
}