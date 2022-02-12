<?php

namespace Patterns\Creational\AbstractFactory;

use Product\ProductInterface;

interface ProductFactoryInterface
{
    public function make(string $productType): ProductInterface;
}