<?php

class CashRegister
{
    private $shopping_item;

    public function scan($qr){
        $coke = new SKU('可乐');
        $coke->setPrice(new Money(300));

        $this->shopping_item = new ShoppingItem($coke);
        $this->shopping_item->addOne();
        return $this;
    }

    public function print_shopping_list(){
        $name     = $this->shopping_item->name();
        $price    = $this->shopping_item->price();
        $quantity = $this->shopping_item->quantity();
        $amount   = $this->shopping_item->amount();

        return
        "***<没钱赚商店>购物清单***" .
        "名称:{$name}，数量:{$quantity} 瓶，单价:{$price->yuan()}(元)，小计:{$amount->yuan()}(元)" .
        "----------------------" .
        "总计:{$amount->yuan()}(元)";
    }
}