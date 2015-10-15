<?php

    class jsonRenderer implements pizzaRender
    {
        public function render($name, $ingredients, Money $cost)
        {
            return json_encode(array($name, $ingredients, $cost));
        }
    }