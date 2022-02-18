<?php

namespace ViktorovIO\Library\Patterns\Creational\Builder;

use ViktorovIO\Library\Product\ProductInterface;

interface ProductBuilderInterface
{
    public function build(): ProductInterface;
}