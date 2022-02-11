<?php

namespace Patterns\Creational\Builder;

use Exception;
use Product\Enum\ProductTypeEnum;

class ProductBuilderFactory
{
    public function makeByProductType(string $productType)
    {
        switch ($productType) {
            case ProductTypeEnum::BIKE:
                return new BikeBuilder();
            case ProductTypeEnum::BUS:
                return new BusBuilder();
            case ProductTypeEnum::CAR:
                return new CarBuilder();
            default:
                throw new Exception(sprintf('Product with type %s not found', $productType));
        }
    }
}