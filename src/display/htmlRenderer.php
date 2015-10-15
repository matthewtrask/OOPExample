<?php

    class htmlRenderer implements pizzaRender
    {
        public function render($name, $ingredients, Money $cost)
        {
            return "<h1>$name</h1>";
        }
    }