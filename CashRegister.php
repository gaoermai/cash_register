<?php

class CashRegister
{
    public function scan($qr){
        return $this;
    }

    public function print_shopping_list(){
        return
        "***<没钱赚商店>购物清单***" .
        "名称:可口可乐，数量:1 瓶，单价:3.00(元)，小计:3.00(元)" .
        "----------------------" .
        "总计:3.00(元)";
    }
}