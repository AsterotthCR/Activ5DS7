<?php

namespace App\Models;

class Order extends Model{
    private $orderNumber;
    private $orderDate;
    private $requiredDate;
    private $shippedDate;
    private $status;
    private $comments;
    private $customerNumber;

    protected $table = "orders";

    // Constructor con todos los argumentos
    public function __construct($orderNumber = null, $orderDate = null, $requiredDate = null, $shippedDate = null,
                                $status = null, $comments = null, $customerNumber = null) {
        $this->orderNumber = $orderNumber;
        $this->orderDate = $orderDate;
        $this->requiredDate = $requiredDate;
        $this->shippedDate = $shippedDate;
        $this->status = $status;
        $this->comments = $comments;
        $this->customerNumber = $customerNumber;
    }

    // Constructor vacío
    public function Order() {}

    // Getters y Setters
    public function getOrderNumber() {
        return $this->orderNumber;
    }

    public function setOrderNumber($orderNumber) {
        $this->orderNumber = $orderNumber;
        return $this;
    }

    public function getOrderDate() {
        return $this->orderDate;
    }

    public function setOrderDate($orderDate) {
        $this->orderDate = $orderDate;
        return $this;
    }

    public function getRequiredDate() {
        return $this->requiredDate;
    }

    public function setRequiredDate($requiredDate) {
        $this->requiredDate = $requiredDate;
        return $this;
    }

    public function getShippedDate() {
        return $this->shippedDate;
    }

    public function setShippedDate($shippedDate) {
        $this->shippedDate = $shippedDate;
        return $this;
    }

    public function getStatus() {
        return $this->status;
    }

    public function setStatus($status) {
        $this->status = $status;
        return $this;
    }

    public function getComments() {
        return $this->comments;
    }

    public function setComments($comments) {
        $this->comments = $comments;
        return $this;
    }

    public function getCustomerNumber() {
        return $this->customerNumber;
    }

    public function setCustomerNumber($customerNumber) {
        $this->customerNumber = $customerNumber;
        return $this;
    }

    // Builder
    public static function builder() {
        return new class {
            private $orderNumber;
            private $orderDate;
            private $requiredDate;
            private $shippedDate;
            private $status;
            private $comments;
            private $customerNumber;

            public function orderNumber($orderNumber) {
                $this->orderNumber = $orderNumber;
                return $this;
            }

            public function orderDate($orderDate) {
                $this->orderDate = $orderDate;
                return $this;
            }

            public function requiredDate($requiredDate) {
                $this->requiredDate = $requiredDate;
                return $this;
            }

            public function shippedDate($shippedDate) {
                $this->shippedDate = $shippedDate;
                return $this;
            }

            public function status($status) {
                $this->status = $status;
                return $this;
            }

            public function comments($comments) {
                $this->comments = $comments;
                return $this;
            }

            public function customerNumber($customerNumber) {
                $this->customerNumber = $customerNumber;
                return $this;
            }

            public function build() {
                return new Order($this->orderNumber, $this->orderDate, $this->requiredDate, $this->shippedDate,
                    $this->status, $this->comments, $this->customerNumber);
            }
        };
    }
}
