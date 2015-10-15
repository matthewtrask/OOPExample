<?php

    /**
     * Class money
     */
    class money
    {

        /**
         * @var Currency
         */
        private $currency;

        /**
         * @var
         */
        private $amount;

        /**
         * @param Currency $currency
         * @param int      $amount
         */
        public function __construct(Currency $currency, $amount)
        {
            $this->ensureInteger($amount);
            $this->amount = $amount;
            $this->currency = $currency;
        }

        /**
         * @param $amount
         */
        private function ensureInteger($amount)
        {
            if(!is_int($amount)){
                throw new \InvalidArgumentException('Amount is not an integer');
            }
        }

        /**
         * @param money $amount
         * @return money
         */
        public function add(Money $amount)
        {
            if(!$this->currency->equals($amount->getCurrency())){
                throw new \InvalidArgumentException('Currency mismatch');
            }
            return new Money($this->currency, $this->amount + $amount->getValue());

        }

        /**
         * @return Currency
         */
        public function getCurrency()
        {
            return $this->currency;
        }

        /**
         * @return int
         */
        public function getValue()
        {
            return $this->amount;
        }
    }