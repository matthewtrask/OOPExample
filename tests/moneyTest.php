<?php

    /**
     * @uses currency
     * @uses usd
     * @covers money
     */
    class moneyTest extends PHPUnit_Framework_TestCase
    {
        /**
         * @expectedException InvalidArgumentException
         */
        public function testNonIntegerAmountWillThrowException()
        {
            $amount = 'abc';
            new Money(new USD, $amount);
        }

        public function testCanBeConstructedWithIntegerValue()
        {
            $amount = 123;
            $money = new Money(new USD, $amount);
            $this->assertInstanceOf(Money::class, $money);
        }

        /**
         * @expectedException InvalidArgumentException
         */
        public function testAddingDifferentCurrenciesWillThrowException(){
            $usCurrency = new USD;
            $cadCurrency = $this->getMock(currency::class);
            $usMoney = new Money($usCurrency, 1);
            $cadMoney = new Money($cadCurrency, 1);
            $usMoney->add($cadMoney);
        }

        public function testMoneyCanBeAdded()
        {
            $usCurrency = new USD;
            $amount = 123;
            $money = new Money($usCurrency, $amount);
            $result = $money->add($money);
            $this->assertEquals($usCurrency, $result->getCurrency());
            $this->assertEquals($amount + $amount, $result->getValue());
        }

        public function testCurrencyCanBeReturned()
        {
            $currency = new USD;
            $money = new Money($currency, 1);
            $this->assertEquals($currency, $money->getCurrency());
        }

        public function testValueCanBeReturned()
        {
            $amount = 123;
            $money = new Money(new USD, $amount);
            $this->assertEquals($amount, $money->getValue());
        }
    }
