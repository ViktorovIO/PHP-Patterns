<?php

namespace ViktorovIO\Library\Patterns\Creational\FactoryMethod;

use Exception;
use ViktorovIO\Library\Patterns\Creational\AbstractFactory\ProductFactoryInterface;
use ViktorovIO\Library\Product\OS\Linux;
use ViktorovIO\Library\Product\OS\MacOS;
use ViktorovIO\Library\Product\OS\Windows;
use ViktorovIO\Library\Product\ProductInterface;
use ViktorovIO\Library\Product\Enum\OSProductTypeEnum;

class OSProductFactory extends FactoryAbstract implements ProductFactoryInterface
{
    public function make(string $productType): ProductInterface
    {
        switch ($productType) {
            case OSProductTypeEnum::LINUX:
                return new Linux();
            case OSProductTypeEnum::MAC_OS:
                return new MacOS();
            case OSProductTypeEnum::WINDOWS:
                return new Windows();
            default:
                throw new Exception(sprintf('Product with type %s not found', $productType));
        }
    }
}
