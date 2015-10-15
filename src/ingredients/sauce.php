<?php

    /**
     * Class sauce
     */
    class sauce implements ingredient
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
            return 'Sauce';
        }
    }
