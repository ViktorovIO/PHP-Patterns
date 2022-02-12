<?php

namespace Patterns\Creational\FactoryMethod;

use Exception;
use Product\OS\Linux;
use Product\OS\MacOS;
use Product\OS\Windows;
use Product\Enum\OSProductTypeEnum;

/**
 * @group unit
 */
class OSProductFactoryTest extends TestCase
{
    public function test_makeLinuxProduct(): void
    {
        $productFactory = new OSProductFactory();
        $linux = $productFactory->make(OSProductTypeEnum::LINUX);

        $this->assertInstanceOf(Linux::class, $linux);
    }

    public function test_makeMacOSProduct(): void
    {
        $productFactory = new OSProductFactory();
        $macOS = $productFactory->make(OSProductTypeEnum::MAC_OS);

        $this->assertInstanceOf(MacOS::class, $macOS);
    }

    public function test_makeWindowsProduct(): void
    {
        $productFactory = new OSProductFactory();
        $windows = $productFactory->make(OSProductTypeEnum::WINDOWS);

        $this->assertInstanceOf(Windows::class, $windows);
    }

    public function test_makeUnknownProduct_throwException(): void
    {
        $this->expectException(Exception::class, 'Product with type Unknown type not found');

        $productFactory = new OSProductFactory();
        $productFactory->make('Unknown type');
    }
}