<?php

    abstract class currency
    {
        abstract public function __toString();

        public function equals(Currency $currency)
        {
            return (String) $this == (String) $currency;
        }
    }