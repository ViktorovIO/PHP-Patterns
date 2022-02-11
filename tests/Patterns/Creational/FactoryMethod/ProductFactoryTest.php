<?php

namespace Patterns\Creational\FactoryMethod;

use Exception;
use Product\Bike;
use Product\Bus;
use Product\Car;
use Product\Enum\ProductTypeEnum;

/**
 * @group unit
 */
class ProductFactoryTest extends TestCase
{
    public function test_makeBikeProduct(): void
    {
        $productFactory = new ProductFactory();
        $bike = $productFactory->make(ProductTypeEnum::BIKE);

        $this->assertInstanceOf(Bike::class, $bike);
    }

    public function test_makeBusProduct(): void
    {
        $productFactory = new ProductFactory();
        $bus = $productFactory->make(ProductTypeEnum::BUS);

        $this->assertInstanceOf(Bus::class, $bus);
    }

    public function test_makeCarProduct(): void
    {
        $productFactory = new ProductFactory();
        $car = $productFactory->make(ProductTypeEnum::CAR);

        $this->assertInstanceOf(Car::class, $car);
    }

    public function test_makeUnknownProduct_throwException(): void
    {
        $this->expectException(Exception::class, 'Product with type Unknown type not found');

        $productFactory = new ProductFactory();
        $productFactory->make('Unknown type');
    }
}