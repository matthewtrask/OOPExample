<?php

require __DIR__.'/src/autoload.php';

$factory = new Factory;
$menu = $factory->createMenu();
$locator = $factory->createRendererLocator();

$pizza = $menu->buildPizza('Everything');
var_dump($pizza->render($locator->getRenderer()));
var_dump($pizza);