<?php

namespace Patterns\Creational\FactoryMethod;

use Product\ProductInterface;

abstract class FactoryAbstract
{
    abstract public function make(string $productType): ProductInterface;
}
