<?php

    /**
     * Class sausage
     */
    class sausage implements ingredient
    {
        /**
         * @return Money
         */
        public function getCost(){
            return new Money(new USD, 20);
        }

        /**
         * @return string
         */
        public function getName()
        {
            return 'Sausage';
        }
    }