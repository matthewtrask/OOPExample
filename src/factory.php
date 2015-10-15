<?php

    /**
     * Class factory
     */
    class factory
    {
        /**
         * @return Menu
         */
        public function createMenu()
        {
            $menu = new Menu();

            $menu->addRecipe($this->createPlainRecipe());
            $menu->addRecipe($this->createVegetarianRecipe());
            $menu->addRecipe($this->createEverythingRecipe());
            $menu->addRecipe($this->createMeatLoversRecipe());

            return $menu;
        }

        /**
         * @return renderLocator
         */
        public function createRendererLocator()
        {
            //$this->config->getRenderFormat()
            return new renderLocator('json', $this);
    }

        /**
         * @return plainRecipe
         */
        private function createPlainRecipe()
        {
            return new plainRecipe;
        }

        /**
         * @return everythingRecipe
         */
        private function createEverythingRecipe()
        {
            return new everythingRecipe;
        }

        /**
         * @return vegetarianRecipe
         */
        private function createVegetarianRecipe()
        {
            return new vegetarianRecipe;
        }

        /**
         * @return meatLoverRecipe
         */
        private function createMeatLoversRecipe()
        {
            return new meatLoverRecipe;
        }

        /**
         * @return jsonRenderer
         */
        public function createJsonRenderer()
        {
            return new jsonRenderer();
        }

        /**
         * @return htmlRenderer
         */
        public function createHtmlRenderer()
        {
            return new htmlRenderer();
        }

        /**
         * @return xmlRenderer
         */
        public function createXmlRenderer()
        {
            return new xmlRenderer();
        }
    }