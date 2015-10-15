<?php

    /**
     * Class renderLocator
     */
    class renderLocator
    {
        /**
         * @var string
         */
        private $format;

        /**
         * @var Factory
         */
        private $factory;

        /**
         * @var array
         */
        private $supportedFormatList =['json', 'xml', 'html'];

        /**
         * @param         $format
         * @param Factory $factory
         */
        public function __construct($format, Factory $factory)
        {
            $this->ensureFormatIsSupported($format);
            $this->format = $format;
            $this->factory = $factory;
        }

        /**
         * @return mixed
         */
        public function getRenderer()
        {
            switch($this->format){
                case "json": {
                    return $this->factory->createJsonRenderer();
                }
                case "html": {
                    return $this->factory->createHtmlRenderer();
                }
                case "xml": {
                    return $this->factory->createXmlRenderer();
                }
            }
        }

        /**
         * @param $format
         * @return InvalidArgumentException
         */
        private function ensureFormatIsSupported($format)
        {
            if(!in_array($format, $this->supportedFormatList)){
                return new InvalidArgumentException('Format is not supported');
            }
        }
    }