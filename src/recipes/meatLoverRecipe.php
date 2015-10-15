<?php

    class meatLoverRecipe extends plainRecipe
    {
        /**
         * @return string
         */
        public function getName()
        {
            return 'Meat Lovers';
        }

        /**
         * @return Pizza
         */
        public function buildPizza()
        {
            $pizza = parent::buildPizza();

            $pizza->addIngredient(new Pepperoni);
            $pizza->addIngredient(new Sausage);
            $pizza->addIngredient(New Bacon);

            return $pizza;
        }
    }
