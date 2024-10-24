<?php

namespace App\Models;

class Customer extends Model{
    private $customerNumber;
    private $customerName;
    private $contactLastName;
    private $contactFirstName;
    private $phone;
    private $addressLine1;
    private $addressLine2;
    private $city;
    private $state;
    private $postalCode;
    private $country;
    private $salesRepEmployeeNumber;
    private $creditLimit;

    protected $table = 'customers';

    // Constructor con todos los argumentos
    public function __construct($customerNumber = null, $customerName = null, $contactLastName = null, $contactFirstName = null, $phone = null,
                                $addressLine1 = null, $addressLine2 = null, $city = null, $state = null, $postalCode = null,
                                $country = null, $salesRepEmployeeNumber = null, $creditLimit = null) {
        $this->customerNumber = $customerNumber;
        $this->customerName = $customerName;
        $this->contactLastName = $contactLastName;
        $this->contactFirstName = $contactFirstName;
        $this->phone = $phone;
        $this->addressLine1 = $addressLine1;
        $this->addressLine2 = $addressLine2;
        $this->city = $city;
        $this->state = $state;
        $this->postalCode = $postalCode;
        $this->country = $country;
        $this->salesRepEmployeeNumber = $salesRepEmployeeNumber;
        $this->creditLimit = $creditLimit;
    }

    // Constructor vacío
    public function Customer() {}

    // Getters and Setters
    public function getCustomerNumber() {
        return $this->customerNumber;
    }

    public function setCustomerNumber($customerNumber) {
        $this->customerNumber = $customerNumber;
        return $this;
    }

    public function getCustomerName() {
        return $this->customerName;
    }

    public function setCustomerName($customerName) {
        $this->customerName = $customerName;
        return $this;
    }

    public function getContactLastName() {
        return $this->contactLastName;
    }

    public function setContactLastName($contactLastName) {
        $this->contactLastName = $contactLastName;
        return $this;
    }

    public function getContactFirstName() {
        return $this->contactFirstName;
    }

    public function setContactFirstName($contactFirstName) {
        $this->contactFirstName = $contactFirstName;
        return $this;
    }

    public function getPhone() {
        return $this->phone;
    }

    public function setPhone($phone) {
        $this->phone = $phone;
        return $this;
    }

    public function getAddressLine1() {
        return $this->addressLine1;
    }

    public function setAddressLine1($addressLine1) {
        $this->addressLine1 = $addressLine1;
        return $this;
    }

    public function getAddressLine2() {
        return $this->addressLine2;
    }

    public function setAddressLine2($addressLine2) {
        $this->addressLine2 = $addressLine2;
        return $this;
    }

    public function getCity() {
        return $this->city;
    }

    public function setCity($city) {
        $this->city = $city;
        return $this;
    }

    public function getState() {
        return $this->state;
    }

    public function setState($state) {
        $this->state = $state;
        return $this;
    }

    public function getPostalCode() {
        return $this->postalCode;
    }

    public function setPostalCode($postalCode) {
        $this->postalCode = $postalCode;
        return $this;
    }

    public function getCountry() {
        return $this->country;
    }

    public function setCountry($country) {
        $this->country = $country;
        return $this;
    }

    public function getSalesRepEmployeeNumber() {
        return $this->salesRepEmployeeNumber;
    }

    public function setSalesRepEmployeeNumber($salesRepEmployeeNumber) {
        $this->salesRepEmployeeNumber = $salesRepEmployeeNumber;
        return $this;
    }

    public function getCreditLimit() {
        return $this->creditLimit;
    }

    public function setCreditLimit($creditLimit) {
        $this->creditLimit = $creditLimit;
        return $this;
    }

    // Builder
    public static function builder() {
        return new class {
            private $customerNumber;
            private $customerName;
            private $contactLastName;
            private $contactFirstName;
            private $phone;
            private $addressLine1;
            private $addressLine2;
            private $city;
            private $state;
            private $postalCode;
            private $country;
            private $salesRepEmployeeNumber;
            private $creditLimit;

            public function customerNumber($customerNumber) {
                $this->customerNumber = $customerNumber;
                return $this;
            }

            public function customerName($customerName) {
                $this->customerName = $customerName;
                return $this;
            }

            public function contactLastName($contactLastName) {
                $this->contactLastName = $contactLastName;
                return $this;
            }

            public function contactFirstName($contactFirstName) {
                $this->contactFirstName = $contactFirstName;
                return $this;
            }

            public function phone($phone) {
                $this->phone = $phone;
                return $this;
            }

            public function addressLine1($addressLine1) {
                $this->addressLine1 = $addressLine1;
                return $this;
            }

            public function addressLine2($addressLine2) {
                $this->addressLine2 = $addressLine2;
                return $this;
            }

            public function city($city) {
                $this->city = $city;
                return $this;
            }

            public function state($state) {
                $this->state = $state;
                return $this;
            }

            public function postalCode($postalCode) {
                $this->postalCode = $postalCode;
                return $this;
            }

            public function country($country) {
                $this->country = $country;
                return $this;
            }

            public function salesRepEmployeeNumber($salesRepEmployeeNumber) {
                $this->salesRepEmployeeNumber = $salesRepEmployeeNumber;
                return $this;
            }

            public function creditLimit($creditLimit) {
                $this->creditLimit = $creditLimit;
                return $this;
            }

            public function build() {
                return new Customer($this->customerNumber, $this->customerName, $this->contactLastName, $this->contactFirstName,
                    $this->phone, $this->addressLine1, $this->addressLine2, $this->city, $this->state, $this->postalCode,
                    $this->country, $this->salesRepEmployeeNumber, $this->creditLimit);
            }
        };
    }

    public function topFiveClients(){
        $sql = "SELECT c.customerNumber, c.customerName, COUNT(p.customerNumber) AS total_orders 
        FROM customers c JOIN payments p ON c.customerNumber = p.customerNumber 
        GROUP BY c.customerNumber, c.customerName ORDER BY total_orders DESC LIMIT 5;";
        
        $topFive = $this->query($sql,[])->get();

        return $topFive;
    }

    public function noobFiveClients(){
        $sql = "SELECT c.customerNumber, c.customerName, COUNT(p.customerNumber) AS total_orders 
        FROM customers c JOIN payments p ON c.customerNumber = p.customerNumber 
        GROUP BY c.customerNumber, c.customerName ORDER BY total_orders ASC LIMIT 5;";
        
        $topFive = $this->query($sql,[])->get();

        return $topFive;
    }
}
