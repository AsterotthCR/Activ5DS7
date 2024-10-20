<?php

namespace Config;

use mysqli;

class Database {
    private static $instance = null;
    private $connection;

    private function __construct() {
        $this->connection = new mysqli("localhost", "root", "contraseña", "classicmodels");
    
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
