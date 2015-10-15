<?php

    /**
     * Class pizza
     */
    class Pizza
    {
        /**
         * @var array
         */
        private $ingredients = array();

        /**
         * @var string
         */
        private $name;
        /**
         * @var string
         */
        private $cost;

        /**
         * @param             $name
         * @param pizzaRender $render
         */
        public function __construct($name)
        {
            $this->name = $name;
        }

        /**
         * @param Ingredient $ingredient
         */
        public function addIngredient(Ingredient $ingredient)
        {
            $this->ingredients[] = $ingredient;
        }

        /**
         *
         */
        private function calculateCost()
        {
            $cost = new Money(new USD, 0);

            foreach($this->ingredients as $ingredient){
                $cost = $cost->add($ingredient->getCost());
            }

            $this->cost = $cost;
        }

        /**
         * @param pizzaRender $renderer
         * @return string
         */
        public function render(pizzaRender $renderer)
        {
            $this->calculateCost();

            return $renderer->render($this->name, $this->ingredients, $this->cost);
        }
    }
