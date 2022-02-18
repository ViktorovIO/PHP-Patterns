<?php

namespace ViktorovIO\Library\Patterns\Structural\DependencyInjection;

class ProductContainer
{
    use DatabaseTrait;

    public static function getTransportFacade(): TransportFacade
    {
        static $transportFacade;

        if (!$transportFacade) {
            $transportFacade = new TransportFacade(
                self::getTransportRepository(),
                new TransportProductTypeEnum()
            );
        }

        return $transportFacade;
    }

    public static function getTransportRepository(): TransportRepository
    {
        static $transportRepository;

        if (!$transportRepository) {
            $transportRepository = new TransportRepository(static::getDbal());
        }

        return $transportRepository;
    }
}