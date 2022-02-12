<?php

namespace Patterns\Creational\Builder;

use Exception;
use Product\Enum\TransportProductTypeEnum;

class ProductBuilderFactory
{
    public function makeByProductType(string $productType)
    {
        switch ($productType) {
            case TransportProductTypeEnum::BIKE:
                return new BikeBuilder();
            case TransportProductTypeEnum::BUS:
                return new BusBuilder();
            case TransportProductTypeEnum::CAR:
                return new CarBuilder();
            default:
                throw new Exception(sprintf('Product with type %s not found', $productType));
        }
    }
}