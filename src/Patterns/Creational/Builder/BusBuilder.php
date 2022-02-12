<?php

namespace Patterns\Creational\Builder;

use Product\Transport\Bus;

class BusBuilder implements ProductBuilderInterface
{
    public function build(): Bus
    {
        $car = new Bus();
        $car->setName('Bus1');

        return $car;
    }
}