<?php

namespace App\Controllers;

use App\Models\Payment;

class PaymentController extends Controller{
    public function index(){
        $payment = new Payment();        
        
        $allpayments = $payment->getAll();
        
        return $allpayments;
    }
}