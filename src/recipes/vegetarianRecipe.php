<?php

    class vegetarianRecipe extends plainRecipe
    {
        public function getName()
        {
           return 'Vegetarian';
        }

        public function buildBurger()
        {
            $pizza = parent::buildPizza();

            $pizza->addIngredient(new Peppers);
            $pizza->addIngredient(new Mushrooms);
            $pizza->addIngredient(new Olives);

            return $pizza;
        }
    }