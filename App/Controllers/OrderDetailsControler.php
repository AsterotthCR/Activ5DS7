<?php

namespace App\Controllers;

use App\Models\OrderDetail;

class OrderDetailDetailsController extends Controller{
    public function index(){
        $orderDetail = new OrderDetail();        
        
        $allorderDetails = $orderDetail->getAll();
        
        return $allorderDetails;
    }
}