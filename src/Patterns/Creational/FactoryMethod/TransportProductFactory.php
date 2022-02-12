<?php

namespace Patterns\Creational\FactoryMethod;

use Exception;
use Patterns\Creational\AbstractFactory\ProductFactoryInterface;
use Product\Transport\Bike;
use Product\Transport\Bus;
use Product\Transport\Car;
use Product\ProductInterface;
use Product\Enum\TransportProductTypeEnum;

class TransportProductFactory extends FactoryAbstract implements ProductFactoryInterface
{
    public function make(string $productType): ProductInterface
    {
        switch ($productType) {
            case TransportProductTypeEnum::BIKE:
                return new Bike();
            case TransportProductTypeEnum::BUS:
                return new Bus();
            case TransportProductTypeEnum::CAR:
                return new Car();
            default:
                throw new Exception(sprintf('Product with type %s not found', $productType));
        }
    }
}
