<?php

    /**
     * Class bacon
     */
    class bacon implements ingredient
    {
        /**
         * @return Money
         */
        public function getCost()
        {
            return new Money(new USD, 1);
        }

        /**
         * @return string
         */
        public function getName()
        {
            return 'Bacon';
        }
    }