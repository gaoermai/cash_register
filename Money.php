<?php

class Money
{
    private $cents = 0;

    public function __construct($cents) {
        $this->cents = $cents;
    }

    public function yuan() {
        return number_format($this->cents / 100, 2);
    }

    public function cents() {
        return $this->cents;
    }

    public function plus($money) {
        return new Money($this->cents + $money->cents);
    }
}