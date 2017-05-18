<?php

class Money
{
    private $cents = 0;

    public function __construct($cents) {
        $this->cents = $cents;
    }

    public function yuan() {
        return number_format($this->cents/100, 2);
    }
}