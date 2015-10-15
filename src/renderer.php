<?php

    class renderer implements pizzaRender
    {
        /**
         * @param       $name
         * @param       $ingredients
         * @param Money $cost
         * @return mixed
         */
        public function render($name, $ingredients, Money $cost){
             return print_r(array($name, $ingredients, $cost));
        }
    }