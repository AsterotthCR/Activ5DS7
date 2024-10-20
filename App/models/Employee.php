<?php

class Employee {
    private $employeeNumber;
    private $lastName;
    private $firstName;
    private $extension;
    private $email;
    private $officeCode;
    private $reportsTo;
    private $jobTitle;

    // Constructor con todos los argumentos
    public function __construct($employeeNumber = null, $lastName = null, $firstName = null, $extension = null, $email = null,
                                $officeCode = null, $reportsTo = null, $jobTitle = null) {
        $this->employeeNumber = $employeeNumber;
        $this->lastName = $lastName;
        $this->firstName = $firstName;
        $this->extension = $extension;
        $this->email = $email;
        $this->officeCode = $officeCode;
        $this->reportsTo = $reportsTo;
        $this->jobTitle = $jobTitle;
    }

    // Constructor vacío
    public function Employee() {}

    // Getters y Setters
    public function getEmployeeNumber() {
        return $this->employeeNumber;
    }

    public function setEmployeeNumber($employeeNumber) {
        $this->employeeNumber = $employeeNumber;
        return $this;
    }

    public function getLastName() {
        return $this->lastName;
    }

    public function setLastName($lastName) {
        $this->lastName = $lastName;
        return $this;
    }

    public function getFirstName() {
        return $this->firstName;
    }

    public function setFirstName($firstName) {
        $this->firstName = $firstName;
        return $this;
    }

    public function getExtension() {
        return $this->extension;
    }

    public function setExtension($extension) {
        $this->extension = $extension;
        return $this;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
        return $this;
    }

    public function getOfficeCode() {
        return $this->officeCode;
    }

    public function setOfficeCode($officeCode) {
        $this->officeCode = $officeCode;
        return $this;
    }

    public function getReportsTo() {
        return $this->reportsTo;
    }

    public function setReportsTo($reportsTo) {
        $this->reportsTo = $reportsTo;
        return $this;
    }

    public function getJobTitle() {
        return $this->jobTitle;
    }

    public function setJobTitle($jobTitle) {
        $this->jobTitle = $jobTitle;
        return $this;
    }

    // Builder
    public static function builder() {
        return new class {
            private $employeeNumber;
            private $lastName;
            private $firstName;
            private $extension;
            private $email;
            private $officeCode;
            private $reportsTo;
            private $jobTitle;

            public function employeeNumber($employeeNumber) {
                $this->employeeNumber = $employeeNumber;
                return $this;
            }

            public function lastName($lastName) {
                $this->lastName = $lastName;
                return $this;
            }

            public function firstName($firstName) {
                $this->firstName = $firstName;
                return $this;
            }

            public function extension($extension) {
                $this->extension = $extension;
                return $this;
            }

            public function email($email) {
                $this->email = $email;
                return $this;
            }

            public function officeCode($officeCode) {
                $this->officeCode = $officeCode;
                return $this;
            }

            public function reportsTo($reportsTo) {
                $this->reportsTo = $reportsTo;
                return $this;
            }

            public function jobTitle($jobTitle) {
                $this->jobTitle = $jobTitle;
                return $this;
            }

            public function build() {
                return new Employee($this->employeeNumber, $this->lastName, $this->firstName, $this->extension,
                    $this->email, $this->officeCode, $this->reportsTo, $this->jobTitle);
            }
        };
    }
}
