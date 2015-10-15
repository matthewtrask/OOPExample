<?php

    /**
     * Class cheese
     */
    class cheese implements ingredient
    {
        /**
         * @return Money
         */
        public function getCost()
        {
            return new Money(new USD, 2);
        }

        /**
         * @return string
         */
        public function getName()
        {
            return 'Cheese';
        }
    }
