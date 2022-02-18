<?php

namespace ViktorovIO\Library\Patterns\Creational\FactoryMethod;

use ViktorovIO\Library\Product\ProductInterface;

abstract class FactoryAbstract
{
    abstract public function make(string $productType): ProductInterface;
}
