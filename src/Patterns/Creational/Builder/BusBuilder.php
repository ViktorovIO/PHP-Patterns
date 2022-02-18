<?php

namespace ViktorovIO\Library\Patterns\Creational\Builder;

use ViktorovIO\Library\Product\Transport\Bus;

class BusBuilder implements ProductBuilderInterface
{
    public function build(): Bus
    {
        $car = new Bus();
        $car->setName('Bus1');

        return $car;
    }
}