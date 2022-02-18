<?php

namespace ViktorovIO\Library\Patterns\Creational\Builder;

use Exception;
use PHPUnit\Framework\TestCase;
use ViktorovIO\Library\Product\Transport\Bike;
use ViktorovIO\Library\Product\Transport\Bus;
use ViktorovIO\Library\Product\Transport\Car;
use ViktorovIO\Library\Product\Enum\TransportProductTypeEnum;

/**
 * @group unit
 */
class BuilderTest extends TestCase
{
    public function test_buildBikeProduct(): void
    {
        $productBuilderFactory = new ProductBuilderFactory();
        $bikeBuilder = $productBuilderFactory->makeByProductType(TransportProductTypeEnum::BIKE);
        $actual = $bikeBuilder->build();

        $this->assertInstanceOf(Bike::class, $actual);
    }

    public function test_buildBusProduct(): void
    {
        $productBuilderFactory = new ProductBuilderFactory();
        $busBuilder = $productBuilderFactory->makeByProductType(TransportProductTypeEnum::BUS);
        $actual = $busBuilder->build();

        $this->assertInstanceOf(Bus::class, $actual);
    }

    public function test_buildCarProduct(): void
    {
        $productBuilderFactory = new ProductBuilderFactory();
        $carBuilder = $productBuilderFactory->makeByProductType(TransportProductTypeEnum::CAR);
        $actual = $carBuilder->build();

        $this->assertInstanceOf(Car::class, $actual);
    }

    public function test_buildUnknownProduct_throwException(): void
    {
        $this->expectException(Exception::class, 'Product with type Unknown type not found');

        $productBuilderFactory = new ProductBuilderFactory();
        $productBuilderFactory->makeByProductType('Unknown type');
    }
}