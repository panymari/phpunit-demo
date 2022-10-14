<?php

use PHPUnit\Framework\TestCase;

class CartTest extends TestCase
{
    public function testCorrectNetPriceIsReturned()
    {
        require './Cart.php';

        $cart = new Cart();
        $cart->price = 10;
        $netPrice = $cart->getNetPrice();

        $this->assertEquals(15, $netPrice);
    }
}