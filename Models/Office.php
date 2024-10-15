<?php

class Office {
    private $officeCode;
    private $city;
    private $phone;
    private $addressLine1;
    private $addressLine2;
    private $state;
    private $country;
    private $postalCode;
    private $territory;

    // Constructor con todos los argumentos
    public function __construct($officeCode = null, $city = null, $phone = null, $addressLine1 = null, $addressLine2 = null,
                                $state = null, $country = null, $postalCode = null, $territory = null) {
        $this->officeCode = $officeCode;
        $this->city = $city;
        $this->phone = $phone;
        $this->addressLine1 = $addressLine1;
        $this->addressLine2 = $addressLine2;
        $this->state = $state;
        $this->country = $country;
        $this->postalCode = $postalCode;
        $this->territory = $territory;
    }

    // Constructor vacío
    public function Office() {}

    // Getters y Setters
    public function getOfficeCode() {
        return $this->officeCode;
    }

    public function setOfficeCode($officeCode) {
        $this->officeCode = $officeCode;
        return $this;
    }

    public function getCity() {
        return $this->city;
    }

    public function setCity($city) {
        $this->city = $city;
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

    public function getState() {
        return $this->state;
    }

    public function setState($state) {
        $this->state = $state;
        return $this;
    }

    public function getCountry() {
        return $this->country;
    }

    public function setCountry($country) {
        $this->country = $country;
        return $this;
    }

    public function getPostalCode() {
        return $this->postalCode;
    }

    public function setPostalCode($postalCode) {
        $this->postalCode = $postalCode;
        return $this;
    }

    public function getTerritory() {
        return $this->territory;
    }

    public function setTerritory($territory) {
        $this->territory = $territory;
        return $this;
    }

    // Builder
    public static function builder() {
        return new class {
            private $officeCode;
            private $city;
            private $phone;
            private $addressLine1;
            private $addressLine2;
            private $state;
            private $country;
            private $postalCode;
            private $territory;

            public function officeCode($officeCode) {
                $this->officeCode = $officeCode;
                return $this;
            }

            public function city($city) {
                $this->city = $city;
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

            public function state($state) {
                $this->state = $state;
                return $this;
            }

            public function country($country) {
                $this->country = $country;
                return $this;
            }

            public function postalCode($postalCode) {
                $this->postalCode = $postalCode;
                return $this;
            }

            public function territory($territory) {
                $this->territory = $territory;
                return $this;
            }

            public function build() {
                return new Office($this->officeCode, $this->city, $this->phone, $this->addressLine1,
                    $this->addressLine2, $this->state, $this->country, $this->postalCode,
                    $this->territory);
            }
        };
    }
}
