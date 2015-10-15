<?php

    /**
     * Class peppers
     */
    class peppers implements ingredient
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
            return 'Peppers';
        }
    }
