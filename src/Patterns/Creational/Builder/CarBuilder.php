<?php

namespace Patterns\Creational\Builder;

use Product\Transport\Car;

class CarBuilder implements ProductBuilderInterface
{
    public function build(): Car
    {
        $car = new Car();
        $car->setName('Car1');

        return $car;
    }
}