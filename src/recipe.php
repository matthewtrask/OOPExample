<?php

    /**
     * Interface recipe
     */
    interface recipe
    {
        /**
         * @return string
         */
        public function getName();

        /**
         * @return Pizza
         */
        public function buildPizza();
    }