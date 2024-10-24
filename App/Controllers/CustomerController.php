<?php

namespace App\Controllers;

use App\Models\Customer;

class CustomerController extends Controller{
    public function index(){
        
        $customers = new Customer();        
        
        $allcustomerss = $customers->getAll();
        
        return $allcustomerss;
    }

    public function findTopFive(){
        $customers = new Customer();        
        
        $allcustomerss = $customers->topFiveClients();
        
        return $allcustomerss;
    }

    public function findNoobFive(){
        $customers = new Customer();        
        
        $allcustomerss = $customers->noobFiveClients();
        
        return $allcustomerss;
    }
}