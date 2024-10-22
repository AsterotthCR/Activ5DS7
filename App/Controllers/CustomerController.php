<?php

namespace App\Controllers;

use App\Models\Customer;

class CustomerController extends Controller{
    public function index(){
        
        $customers = new Customer();        
        
        $allcustomerss = $customers->getAll();
        
        return $allcustomerss;
    }
}