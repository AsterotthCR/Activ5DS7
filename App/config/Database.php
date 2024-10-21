<?php

namespace App\Config;

use mysqli;

class Database {
    
    protected $db_host = 'localhost';
    protected $db_user = 'root';
    protected $db_password = '';
    protected $db_name = 'classicmodels';

    private static $instance = null;
    private $connection;

    private function __construct() {
        $this->connection();
    }

    public function connection(){
        $this->connection = new mysqli($this->db_host, $this->db_user,$this->db_password,$this->db_name);
    
        if ($this->connection->connect_error) {
            die("Error de conexión: " . $this->connection->connect_error);
        }
    
        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    }

    public static function getInstance() {
        if (!self::$instance) {
            self::$instance = new Database();
        }
        return self::$instance;
    }

    public function getConnection() {
        return $this->connection;
    }
}
