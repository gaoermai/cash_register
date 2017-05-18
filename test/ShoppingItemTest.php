<?php
use PHPUnit\Framework\TestCase;

class ShoppingItemTest extends TestCase
{
    /**
     * @test
     */
    public function quantity_is_1_and_amount_is_3_yuan_when_add_a_coke() {
        $coke = new SKU('可乐');
        $coke->setPrice(new Money(300));

        $shopping_item = new ShoppingItem($coke);
        $shopping_item->addOne();

        $this->assertEquals('可乐', $shopping_item->name());
        $this->assertEquals(1, $shopping_item->quantity());
        $this->assertEquals(new Money(300), $shopping_item->price());
        $this->assertEquals(new Money(300), $shopping_item->amount());
    }
}

?>