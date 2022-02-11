<?php

namespace Patterns\Creational\FactoryMethod;

use Exception;
use Product\Bike;
use Product\Bus;
use Product\Car;
use Product\ProductInterface;
use Product\Enum\ProductTypeEnum;

class ProductFactory extends FactoryAbstract
{
    public function make(string $productType): ProductInterface
    {
        switch ($productType) {
            case ProductTypeEnum::BIKE:
                return new Bike();
            case ProductTypeEnum::BUS:
                return new Bus();
            case ProductTypeEnum::CAR:
                return new Car();
            default:
                throw new Exception(sprintf('Product with type %s not found', $productType));
        }
    }
}
