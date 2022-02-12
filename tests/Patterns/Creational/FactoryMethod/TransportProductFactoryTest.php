<?php

namespace Patterns\Creational\FactoryMethod;

use Exception;
use Product\Transport\Bike;
use Product\Transport\Bus;
use Product\Transport\Car;
use Product\Enum\TransportProductTypeEnum;

/**
 * @group unit
 */
class TransportProductFactoryTest extends TestCase
{
    public function test_makeBikeProduct(): void
    {
        $productFactory = new TransportProductFactory();
        $bike = $productFactory->make(TransportProductTypeEnum::BIKE);

        $this->assertInstanceOf(Bike::class, $bike);
    }

    public function test_makeBusProduct(): void
    {
        $productFactory = new TransportProductFactory();
        $bus = $productFactory->make(TransportProductTypeEnum::BUS);

        $this->assertInstanceOf(Bus::class, $bus);
    }

    public function test_makeCarProduct(): void
    {
        $productFactory = new TransportProductFactory();
        $car = $productFactory->make(TransportProductTypeEnum::CAR);

        $this->assertInstanceOf(Car::class, $car);
    }

    public function test_makeUnknownProduct_throwException(): void
    {
        $this->expectException(Exception::class, 'Product with type Unknown type not found');

        $productFactory = new TransportProductFactory();
        $productFactory->make('Unknown type');
    }
}