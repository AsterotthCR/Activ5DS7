<?php

namespace App\Controllers;

use App\Models\Office;

class officeController extends Controller{
    public function index(){
        
        $office = new Office();        
        
        $allOffices = $office->getAll();
        
        return $allOffices;
    }

    public function createOffice(){
            $office = new Office();
    
            $data = $_POST;
    
            $office->create($data);
            
            return $this->redirect('/services');
    }

    public function editOffice($id){
        $office = new Office();

        $officeInfo = $office->getById($id);
        
        return $this->view('office.editoffice',compact('officeInfo')); 
    }

    public function updateOfiice($id){
        $office = new Office();

        $data = $_POST;

        $office->update($id, $data);

        return $this->redirect("/services");
    }


}