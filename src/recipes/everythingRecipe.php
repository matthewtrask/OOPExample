<?php

    class everythingRecipe extends plainRecipe
    {
        public function getName()
        {
            return 'Everything';
        }

        public function buildPizza()
        {
            $pizza = parent::buildPizza();

            $pizza->addIngredient(new bacon);
            $pizza->addIngredient(new mushrooms);
            $pizza->addIngredient(new olives);
            $pizza->addIngredient(new pepperoni);
            $pizza->addIngredient(new peppers);
            $pizza->addIngredient(new sausage);

            return $pizza;
        }
    }