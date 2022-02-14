<?php

namespace Product\Enum;

final class TransportProductTypeEnum
{
    public const BIKE = 'bike';
    public const BUS = 'bus';
    public const CAR = 'car';

    public function getTypeList(): array
    {
        return [
            self::BIKE,
            self::BUS,
            self::CAR
        ];
    }
}
