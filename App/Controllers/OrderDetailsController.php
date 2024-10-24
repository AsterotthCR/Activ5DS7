<?php

namespace App\Controllers;

use App\Models\OrderDetail;

class OrderDetailsController extends Controller{
    public function index(){
        $orderDetail = new OrderDetail();        
        
        $allorderDetails = $orderDetail->getAll();
        
        return $allorderDetails;
    }

    public function grupByProducts(){
        $orderDetail = new OrderDetail();        
        
        $allorderDetails = $orderDetail->grupByProduct();
        
        return $allorderDetails;
        
    }
    
}