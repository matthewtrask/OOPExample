<?php

    /**
     * Class olives
     */
    class olives implements ingredient
    {
        /**
         * @return Money
         */
        public function getcost()
        {
            return new Money(new USD, 1);
        }

        /**
         * @return string
         */
        public function getName()
        {
            return 'Olives';
        }
    }