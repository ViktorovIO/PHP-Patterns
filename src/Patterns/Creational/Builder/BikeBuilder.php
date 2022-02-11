<?php

namespace Patterns\Creational\Builder;

use Product\Bike;

class BikeBuilder implements ProductBuilderInterface
{
    public function build(): Bike
    {
        $car = new Bike();
        $car->setName('Bike1');

        return $car;
    }
}