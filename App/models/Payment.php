<?php

namespace App\Models;

class Payment {
    private $customerNumber;
    private $checkNumber;
    private $paymentDate;
    private $amount;

    // Constructor con todos los argumentos
    public function __construct($customerNumber = null, $checkNumber = null, $paymentDate = null, $amount = null) {
        $this->customerNumber = $customerNumber;
        $this->checkNumber = $checkNumber;
        $this->paymentDate = $paymentDate;
        $this->amount = $amount;
    }

    // Constructor vacío
    public function Payment() {}

    // Getters y Setters
    public function getCustomerNumber() {
        return $this->customerNumber;
    }

    public function setCustomerNumber($customerNumber) {
        $this->customerNumber = $customerNumber;
        return $this;
    }

    public function getCheckNumber() {
        return $this->checkNumber;
    }

    public function setCheckNumber($checkNumber) {
        $this->checkNumber = $checkNumber;
        return $this;
    }

    public function getPaymentDate() {
        return $this->paymentDate;
    }

    public function setPaymentDate($paymentDate) {
        $this->paymentDate = $paymentDate;
        return $this;
    }

    public function getAmount() {
        return $this->amount;
    }

    public function setAmount($amount) {
        $this->amount = $amount;
        return $this;
    }

    // Builder
    public static function builder() {
        return new class {
            private $customerNumber;
            private $checkNumber;
            private $paymentDate;
            private $amount;

            public function customerNumber($customerNumber) {
                $this->customerNumber = $customerNumber;
                return $this;
            }

            public function checkNumber($checkNumber) {
                $this->checkNumber = $checkNumber;
                return $this;
            }

            public function paymentDate($paymentDate) {
                $this->paymentDate = $paymentDate;
                return $this;
            }

            public function amount($amount) {
                $this->amount = $amount;
                return $this;
            }

            public function build() {
                return new Payment($this->customerNumber, $this->checkNumber, $this->paymentDate, $this->amount);
            }
        };
    }
}
