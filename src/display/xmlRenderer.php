<?php

    class xmlRenderer implements pizzaRender
    {
        public function render($name, $ingredients, Money $cost)
        {
            return "
                <name>$name</name>
            ";
        }
    }