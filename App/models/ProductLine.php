<?php

namespace App\Models;

class ProductLine {
    private $productLine;
    private $textDescription;
    private $htmlDescription;
    private $image;

    // Constructor con todos los argumentos
    public function __construct($productLine = null, $textDescription = null, $htmlDescription = null, $image = null) {
        $this->productLine = $productLine;
        $this->textDescription = $textDescription;
        $this->htmlDescription = $htmlDescription;
        $this->image = $image;
    }

    // Constructor vacío
    public function ProductLine() {}

    // Getters y Setters
    public function getProductLine() {
        return $this->productLine;
    }

    public function setProductLine($productLine) {
        $this->productLine = $productLine;
        return $this;
    }

    public function getTextDescription() {
        return $this->textDescription;
    }

    public function setTextDescription($textDescription) {
        $this->textDescription = $textDescription;
        return $this;
    }

    public function getHtmlDescription() {
        return $this->htmlDescription;
    }

    public function setHtmlDescription($htmlDescription) {
        $this->htmlDescription = $htmlDescription;
        return $this;
    }

    public function getImage() {
        return $this->image;
    }

    public function setImage($image) {
        $this->image = $image;
        return $this;
    }

    // Builder
    public static function builder() {
        return new class {
            private $productLine;
            private $textDescription;
            private $htmlDescription;
            private $image;

            public function productLine($productLine) {
                $this->productLine = $productLine;
                return $this;
            }

            public function textDescription($textDescription) {
                $this->textDescription = $textDescription;
                return $this;
            }

            public function htmlDescription($htmlDescription) {
                $this->htmlDescription = $htmlDescription;
                return $this;
            }

            public function image($image) {
                $this->image = $image;
                return $this;
            }

            public function build() {
                return new ProductLine($this->productLine, $this->textDescription, $this->htmlDescription, $this->image);
            }
        };
    }
}
