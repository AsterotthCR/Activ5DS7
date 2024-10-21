<?php

namespace App\Models;

use App\Config\Database;

class Model{

    protected $table;
    protected $columID;
    protected $query;

    public function query($sql, $data = [], $params = null) {
        $db = Database::getInstance()->getConnection();
    
        if ($data) {
            if ($params == null) {
                $params = str_repeat('s', count($data));
            }
    
            $stmt = $db->prepare($sql);
            $stmt->bind_param($params, ...$data);
            $stmt->execute();
            $this->query= $stmt->get_result();
        } else {
            $this->query = $db->query($sql);
        }
    
        return $this;
    }
    

    public function get(){
        return $this->query->fetch_all(MYSQLI_ASSOC);
    }

    public function first(){
        return $this->query->fetch_assoc();
    }

    public function getWhere($columName,$operator, $value = null){
        if($value == null){
            $value = $operator;
            $operator = '=';
        }
        $sql = "SELECT * FROM {$this->table} WHERE {$columName} {$operator} ?";

        $this->query($sql,[$value]);

        return $this->get(); 
    }

    public function getAll(){
        $sql = "SELECT * From {$this->table}";
        return $this->query($sql)->get();
    }

    public function getById($id){       
        $sql = "SELECT * From {$this->table} WHERE {$this->columID} = ?";
        return $this->query($sql,[$id],'i')->first();
    }

    public function create($data) {
        $columns = array_keys($data);
        $columns = implode(', ', $columns);
       
        $values = array_values($data);
    
        $sql = "INSERT INTO {$this->table} ({$columns}) VALUES (" . str_repeat('?, ', count($values)-1). "?)";
    
        $this->query($sql, $values);

        $insertedId = Database::getInstance()->getConnection()->insert_id;
    
        return $this->getById($insertedId);
    }

    public function update($id, $data){

        $fields = [];

        foreach ($data as $key => $value){
            $fields[] = "{$key} = ?";
        }

        $fields = implode(', ', $fields);

        $sql = "UPDATE {$this->table} SET {$fields} WHERE {$this->columID} = ?";

        $values = array_values($data);
        $values[] = $id;

        $this->query($sql,$values);

        return $this->getById($id);
    }

    public function delete($id){
        $sql = "DELETE FROM {$this->table} where {$this->columID} = ?";
        $this->query($sql,[$id],'i'); 
    }
}