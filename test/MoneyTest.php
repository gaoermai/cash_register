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

    /**
     * @test
     */
    public function six_when_four_plus_two() {
        $this->assertEquals(new Money(600), (new Money(400))->plus(new Money(200)));
    }
}