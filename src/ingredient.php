<?php

    /**
     * Interface ingredient
     */
    interface ingredient
    {
        /**
         * @return money
         */
        public function getCost();

        /**
         * @return string
         */
        public function getName();
    }