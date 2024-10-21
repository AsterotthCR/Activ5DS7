<?php

namespace App\Models;


class User extends Model {
    protected $codUser;
    protected $username;
    protected $password;
    protected $name;
    protected $lastname;


    protected $columID = 'codUser';
    protected $table = 'users';

    // Constructor con todos los argumentos
    public function __construct($codUser = null, $username = null, $password = null, $name = null, $lastname = null) {
        $this->codUser = $codUser;
        $this->username = $username;
        $this->password = $password;
        $this->name = $name;
        $this->lastname = $lastname;
    }

    // Getters
    public function getCodUser() {
        return $this->codUser;
    }

    public function getUsername() {
        return $this->username;
    }

    public function getPassword() {
        return $this->password;
    }

    public function getName() {
        return $this->name;
    }

    public function getLastname() {
        return $this->lastname;
    }

    public function getColumID() {
        return $this->columID;
    }

    // Setters
    public function setCodUser($codUser) {
        $this->codUser = $codUser;
    }

    public function setUsername($username) {
        $this->username = $username;
    }

    public function setPassword($password) {
        $this->password = $password;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function setLastname($lastname) {
        $this->lastname = $lastname;
    }

    // Convertir a array
    public function toArray() {
        return [
            'codUser' => $this->codUser,
            'username' => $this->username,
            'password' => $this->password,
            'name' => $this->name,
            'lastname' => $this->lastname
        ];
    }

    // Builder pattern
    public static function builder() {
        return new class {
            private $codUser;
            private $username;
            private $password;
            private $name;
            private $lastname;

            public function codUser($codUser) {
                $this->codUser = $codUser;
                return $this;
            }

            public function username($username) {
                $this->username = $username;
                return $this;
            }

            public function password($password) {
                $this->password = $password;
                return $this;
            }

            public function name($name) {
                $this->name = $name;
                return $this;
            }

            public function lastname($lastname) {
                $this->lastname = $lastname;
                return $this;
            }

            public function build() {
                return new User($this->codUser, $this->username, $this->password, $this->name, $this->lastname);
            }
        };
    }

    public function authenticate($username, $password) {
        $sql = ("SELECT * FROM users WHERE user = ? && password = ?");
        $user = $this->query($sql,[$username,$password])->first();

        if ($user) {
            return ($user);
        }
        return null;
    }

    
}

