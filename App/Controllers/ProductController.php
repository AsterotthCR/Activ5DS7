<?php

namespace App\Controllers;

use App\Models\Product;

class ProductController{
    public function index(){
        $product = new Product();        
        
        $allproducts = $product->getAll();
        
        return $allproducts;
    }

    public function findByLine($line){

        $product = new Product();        
        
        $allproducts = $product->getWhere("productLine",$line);
        
        return $allproducts;
        
    }
}