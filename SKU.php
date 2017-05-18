<?php

class SKU
{
    private $name;
    private $price;

    public function __construct($name) {
        $this->name = $name;
    }

    public function name() {
        return $this->name;
    }

    public function price() {
        return $this->price;
    }

    public function setPrice($money) {
        $this->price = $money;
    }
}