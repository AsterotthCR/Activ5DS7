<?php

namespace App\Models;

class OrderDetail  extends Model{
    private $orderNumber;
    private $productCode;
    private $quantityOrdered;
    private $priceEach;
    private $orderLineNumber;

    protected $table = "orderdetails";

    // Constructor con todos los argumentos
    public function __construct($orderNumber = null, $productCode = null, $quantityOrdered = null, $priceEach = null, $orderLineNumber = null) {
        $this->orderNumber = $orderNumber;
        $this->productCode = $productCode;
        $this->quantityOrdered = $quantityOrdered;
        $this->priceEach = $priceEach;
        $this->orderLineNumber = $orderLineNumber;
    }

    // Constructor vacío
    public function OrderDetail() {}

    // Getters y Setters
    public function getOrderNumber() {
        return $this->orderNumber;
    }

    public function setOrderNumber($orderNumber) {
        $this->orderNumber = $orderNumber;
        return $this;
    }

    public function getProductCode() {
        return $this->productCode;
    }

    public function setProductCode($productCode) {
        $this->productCode = $productCode;
        return $this;
    }

    public function getQuantityOrdered() {
        return $this->quantityOrdered;
    }

    public function setQuantityOrdered($quantityOrdered) {
        $this->quantityOrdered = $quantityOrdered;
        return $this;
    }

    public function getPriceEach() {
        return $this->priceEach;
    }

    public function setPriceEach($priceEach) {
        $this->priceEach = $priceEach;
        return $this;
    }

    public function getOrderLineNumber() {
        return $this->orderLineNumber;
    }

    public function setOrderLineNumber($orderLineNumber) {
        $this->orderLineNumber = $orderLineNumber;
        return $this;
    }

    // Builder
    public static function builder() {
        return new class {
            private $orderNumber;
            private $productCode;
            private $quantityOrdered;
            private $priceEach;
            private $orderLineNumber;

            public function orderNumber($orderNumber) {
                $this->orderNumber = $orderNumber;
                return $this;
            }

            public function productCode($productCode) {
                $this->productCode = $productCode;
                return $this;
            }

            public function quantityOrdered($quantityOrdered) {
                $this->quantityOrdered = $quantityOrdered;
                return $this;
            }

            public function priceEach($priceEach) {
                $this->priceEach = $priceEach;
                return $this;
            }

            public function orderLineNumber($orderLineNumber) {
                $this->orderLineNumber = $orderLineNumber;
                return $this;
            }

            public function build() {
                return new OrderDetail($this->orderNumber, $this->productCode, $this->quantityOrdered, $this->priceEach, $this->orderLineNumber);
            }
        };
    }

    public function grupByProduct(){
        
        $sql = "SELECT productCode, 
        SUM(quantityOrdered) AS total_quantity_ordered, 
        SUM(priceEach * quantityOrdered) AS total_sales, 
        COUNT(orderLineNumber) AS total_orders 
        FROM orderdetails 
        GROUP BY productCode;";

        return $this->query($sql,[])->get();

    }
}
