<?php

namespace ViktorovIO\Library\Patterns\Creational\Builder;

use ViktorovIO\Library\Product\Transport\Car;

class CarBuilder implements ProductBuilderInterface
{
    public function build(): Car
    {
        $car = new Car();
        $car->setName('Car1');

        return $car;
    }
}