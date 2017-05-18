<?php
use PHPUnit\Framework\TestCase;

class MoneyTest extends TestCase
{
    /**
     * @test
     */
    public function print_yuan() {
        $this->assertEquals('3.00', (new Money(300))->yuan());
    }
}