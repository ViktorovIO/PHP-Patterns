<?php

namespace ViktorovIO\Library\Patterns\Creational\FactoryMethod;

use Exception;
use ViktorovIO\Library\Patterns\Creational\AbstractFactory\ProductFactoryInterface;
use ViktorovIO\Library\Product\Transport\Bike;
use ViktorovIO\Library\Product\Transport\Bus;
use ViktorovIO\Library\Product\Transport\Car;
use ViktorovIO\Library\Product\Enum\TransportProductTypeEnum;
use ViktorovIO\Library\Product\Transport\TransportProductInterface;

class TransportProductFactory extends FactoryAbstract implements ProductFactoryInterface
{
    public function make(string $productType): TransportProductInterface
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
