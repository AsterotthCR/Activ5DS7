<?php

namespace App\Models;

class Product extends Model{
    private $productCode;
    private $productName;
    private $productLine;
    private $productScale;
    private $productVendor;
    private $productDescription;
    private $quantityInStock;
    private $buyPrice;
    private $msrp;

    protected $table = "products";

    // Constructor con todos los argumentos
    public function __construct($productCode = null, $productName = null, $productLine = null, $productScale = null,
                                $productVendor = null, $productDescription = null, $quantityInStock = null,
                                $buyPrice = null, $msrp = null) {
        $this->productCode = $productCode;
        $this->productName = $productName;
        $this->productLine = $productLine;
        $this->productScale = $productScale;
        $this->productVendor = $productVendor;
        $this->productDescription = $productDescription;
        $this->quantityInStock = $quantityInStock;
        $this->buyPrice = $buyPrice;
        $this->msrp = $msrp;
    }

    // Constructor vacío
    public function Product() {}

    // Getters y Setters
    public function getProductCode() {
        return $this->productCode;
    }

    public function setProductCode($productCode) {
        $this->productCode = $productCode;
        return $this;
    }

    public function getProductName() {
        return $this->productName;
    }

    public function setProductName($productName) {
        $this->productName = $productName;
        return $this;
    }

    public function getProductLine() {
        return $this->productLine;
    }

    public function setProductLine($productLine) {
        $this->productLine = $productLine;
        return $this;
    }

    public function getProductScale() {
        return $this->productScale;
    }

    public function setProductScale($productScale) {
        $this->productScale = $productScale;
        return $this;
    }

    public function getProductVendor() {
        return $this->productVendor;
    }

    public function setProductVendor($productVendor) {
        $this->productVendor = $productVendor;
        return $this;
    }

    public function getProductDescription() {
        return $this->productDescription;
    }

    public function setProductDescription($productDescription) {
        $this->productDescription = $productDescription;
        return $this;
    }

    public function getQuantityInStock() {
        return $this->quantityInStock;
    }

    public function setQuantityInStock($quantityInStock) {
        $this->quantityInStock = $quantityInStock;
        return $this;
    }

    public function getBuyPrice() {
        return $this->buyPrice;
    }

    public function setBuyPrice($buyPrice) {
        $this->buyPrice = $buyPrice;
        return $this;
    }

    public function getMsrp() {
        return $this->msrp;
    }

    public function setMsrp($msrp) {
        $this->msrp = $msrp;
        return $this;
    }

    // Builder
    public static function builder() {
        return new class {
            private $productCode;
            private $productName;
            private $productLine;
            private $productScale;
            private $productVendor;
            private $productDescription;
            private $quantityInStock;
            private $buyPrice;
            private $msrp;

            public function productCode($productCode) {
                $this->productCode = $productCode;
                return $this;
            }

            public function productName($productName) {
                $this->productName = $productName;
                return $this;
            }

            public function productLine($productLine) {
                $this->productLine = $productLine;
                return $this;
            }

            public function productScale($productScale) {
                $this->productScale = $productScale;
                return $this;
            }

            public function productVendor($productVendor) {
                $this->productVendor = $productVendor;
                return $this;
            }

            public function productDescription($productDescription) {
                $this->productDescription = $productDescription;
                return $this;
            }

            public function quantityInStock($quantityInStock) {
                $this->quantityInStock = $quantityInStock;
                return $this;
            }

            public function buyPrice($buyPrice) {
                $this->buyPrice = $buyPrice;
                return $this;
            }

            public function msrp($msrp) {
                $this->msrp = $msrp;
                return $this;
            }

            public function build() {
                return new Product($this->productCode, $this->productName, $this->productLine, $this->productScale,
                    $this->productVendor, $this->productDescription, $this->quantityInStock,
                    $this->buyPrice, $this->msrp);
            }
        };
    }
}
