<?php

namespace Patterns\Creational\FactoryMethod;

use Exception;
use Patterns\Creational\AbstractFactory\ProductFactoryInterface;
use Product\OS\Linux;
use Product\OS\MacOS;
use Product\OS\Windows;
use Product\ProductInterface;
use Product\Enum\OSProductTypeEnum;

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
