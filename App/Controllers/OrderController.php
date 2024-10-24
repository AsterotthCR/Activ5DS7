<?php

namespace App\Controllers;

use App\Models\Order;
use App\Models\OrderDetail;

class OrderController extends Controller{
    public function index(){
        $order = new Order();        
        
        $allorders = $order->getAll();
        
        return $allorders;
    }

    public function getOrderDetails($id){
        $orderDetail = new OrderDetail();        
        
        $allorderDetails = $orderDetail->getWhere("orderNumber",$id);

        return $allorderDetails;
    }
}