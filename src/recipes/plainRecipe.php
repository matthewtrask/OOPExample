<?php

    /**
     * Class plain
     */
    class plainRecipe implements recipe
    {
        /**
         * @return string
         */
        public function getName()
        {
            return 'Plain';
        }

        /**
         * @return Pizza
         */
        public function buildPizza()
        {
            $pizza = new Pizza($this->getName());
            $pizza->addIngredient(new sauce);
            $pizza->addIngredient(new cheese);

            return $pizza;
        }
    }