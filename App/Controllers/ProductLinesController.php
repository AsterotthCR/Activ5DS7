<?php

namespace App\Controllers;

use App\Models\ProductLine;

class ProductLinesController extends Controller{
    public function index(){
        
        $productLine = new ProductLine();        
        
        $allproductLines = $productLine->getAll();
        
        return $allproductLines;
    }
}