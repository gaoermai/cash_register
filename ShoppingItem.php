<?php

class ShoppingItem
{
    private $sku;
    private $name;
    private $price;
    private $quantity;
    private $amount;

    public function __construct($sku) {
        $this->sku = $sku;
        $this->quantity = 0;
        $this->amount = new Money(0);
    }

    public function addOne() {
        $this->name = $this->sku->name();
        $this->quantity++;
        $this->price = $this->sku->price();
        $this->amount = $this->amount()->plus($this->sku->price());
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