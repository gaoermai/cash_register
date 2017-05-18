<?php
use PHPUnit\Framework\TestCase;

class AcceptanceTest extends TestCase
{
    /**
     * @test
     */
    public function buy_a_coke_when_no_discount() {
        $qr_coke = new QR('ITEM000001');
        $cash_register = new CashRegister();

        $actual_shopping_list = $cash_register->scan($qr_coke)
            ->print_shopping_list();

        $expected_shopping_list =
            "***<没钱赚商店>购物清单***" .
            "名称:可乐，数量:1 瓶，单价:3.00(元)，小计:3.00(元)" .
            "----------------------" .
            "总计:3.00(元)";

        $this->assertEquals($expected_shopping_list, $actual_shopping_list);
    }

    /**
     * @test
     */
    public function buy_two_cokes_when_no_discount() {
        $qr_coke = new QR('ITEM000001');
        $cash_register = new CashRegister();

        $actual_shopping_list = $cash_register->scan($qr_coke)
            ->scan($qr_coke)
            ->print_shopping_list();

        $expected_shopping_list =
            "***<没钱赚商店>购物清单***" .
            "名称:可乐，数量:2 瓶，单价:3.00(元)，小计:6.00(元)" .
            "----------------------" .
            "总计:6.00(元)";

        $this->assertEquals($expected_shopping_list, $actual_shopping_list);
    }
}

?>