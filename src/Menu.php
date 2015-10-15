<?php

    /**
     * Class Menu
     */
    class Menu
    {
        /**
         * @var array
         */
        private $recipes = array();

        /**
         * @param $name
         * @return mixed
         */
        private function getRecipe($name)
        {
            if(!isset($this->recipes[$name])){
                throw new InvalidArgumentException('The option does not exist');
            }

            return $this->recipes[$name];
        }

        /**
         * @param Recipe $recipe
         */
        public function addRecipe(Recipe $recipe)
        {
            $this->recipes[$recipe->getName()] = $recipe;
        }

        /**
         * @param $name
         * @return mixed
         */
        public function buildPizza($name)
        {
            return $this->getRecipe($name)->buildPizza();
        }
    }