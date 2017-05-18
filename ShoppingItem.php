<?php

class ShoppingItem
{
    private $sku;
    private $name;
    private $price;
    private $quantity = 0;
    private $amount = 0;

    public function __construct($sku) {
        $this->sku = $sku;
    }

    public function addOne() {
        $this->name = $this->sku->name();
        $this->quantity++;
        $this->price = $this->sku->price();
        $this->amount = $this->sku->price();
    }

    public function name() {
        return $this->name;
    }

    public function price() {
        return $this->price;
    }

    public function quantity() {
        return $this->quantity;
    }

    public function amount() {
        return $this->amount;
    }
}