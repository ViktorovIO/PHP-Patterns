<?php

namespace Patterns\Creational\Builder;

use Product\ProductInterface;

interface ProductBuilderInterface
{
    public function build(): ProductInterface;
}