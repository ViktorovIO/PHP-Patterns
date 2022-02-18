<?php

namespace ViktorovIO\Library\Patterns\Creational\Builder;

use ViktorovIO\Library\Product\Transport\Bike;

class BikeBuilder implements ProductBuilderInterface
{
    public function build(): Bike
    {
        $car = new Bike();
        $car->setName('Bike1');

        return $car;
    }
}