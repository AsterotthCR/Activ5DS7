<?php

namespace App\Controllers;

use App\Models\Employee;

class EmployeeController extends Controller{
    public function index(){
        
        $employee = new Employee();        
        
        $allemployees = $employee->getAll();
        
        return $allemployees;
    }
}