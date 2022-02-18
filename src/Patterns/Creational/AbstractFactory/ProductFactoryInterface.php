<?php

namespace ViktorovIO\Library\Patterns\Creational\AbstractFactory;

use ViktorovIO\Library\Product\ProductInterface;

interface ProductFactoryInterface
{
    public function make(string $productType): ProductInterface;
}