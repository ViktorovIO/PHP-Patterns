<?php

namespace Patterns\Structural\Adapter\Transport;

use Supplier\Response\CarResponse;

class CarAdapter
{
    private CarResponse $carResponse;
    private string $lang;

    public function __construct(CarResponse $carResponse, string $lang)
    {
        $this->carResponse = $carResponse;
        $this->lang = $lang;
    }

    public function getId(): int
    {
        return $this->carResponse->id;
    }

    public function getName(): string
    {
        switch ($this->lang) {
            case 'ru':
                return $this->carResponse->nameRu;
            case 'en':
            default:
                return $this->carResponse->nameEn;
        }
    }

    public function getSpeed(): int
    {
        return ($this->carResponse->speedInMiles * 1.60934);
    }
}