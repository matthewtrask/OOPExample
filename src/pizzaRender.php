<?php

    /**
     * Interface pizzaRender
     */
    interface pizzaRender
    {
        /**
         * @param       $name
         * @param       $ingredients
         * @param Money $cost
         * @return      string
         */
        public function render($name, $ingredients, Money $cost);
    }