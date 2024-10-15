<?php
class User {
    private $id;
    private $username;
    private $password;

    // Constructor sin argumentos
    public function __construct() {}

    // Constructor con todos los argumentos
    public function __constructWithAll($id, $username, $password) {
        $this->id = $id;
        $this->username = $username;
        $this->password = $password;
    }

    // Getters y Setters
    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getUsername() {
        return $this->username;
    }

    public function setUsername($username) {
        $this->username = $username;
    }

    public function getPassword() {
        return $this->password;
    }

    public function setPassword($password) {
        $this->password = $password;
    }

    // Builder
    public static function builder() {
        return new class {
            private $id;
            private $username;
            private $password;

            public function setId($id) {
                $this->id = $id;
                return $this;
            }

            public function setUsername($username) {
                $this->username = $username;
                return $this;
            }

            public function setPassword($password) {
                $this->password = $password;
                return $this;
            }

            public function build() {
                $user = new User();
                $user->setId($this->id);
                $user->setUsername($this->username);
                $user->setPassword($this->password);
                return $user;
            }
        };
    }
}
