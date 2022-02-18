<?php

namespace ViktorovIO\Library\Patterns\Structural\Facade;

use ViktorovIO\Library\Product\Enum\TransportProductTypeEnum;
use ViktorovIO\Library\Product\Transport\TransportProductInterface;
use ViktorovIO\Library\Product\Transport\TransportRepository;

class TransportFacade
{
    private TransportRepository $transportRepository;
    private TransportProductTypeEnum $transportProductTypeEnum;

    public function __construct(
        TransportRepository $transportRepository,
        TransportProductTypeEnum $transportProductTypeEnum
    ) {
        $this->transportRepository = $transportRepository;
        $this->transportProductTypeEnum = $transportProductTypeEnum;
    }

    public function getTransportById(int $id): ?TransportProductInterface
    {
        return $this->transportRepository->getById($id);
    }

    /** @return TransportProductInterface[] */
    public function getTransportListByType(string $type): array
    {
        if ($this->isCorrectProductType($type) === false) {
            return [];
        }

        return $this->transportRepository->getByType($type);
    }

    public function save(TransportProductInterface $transportProduct): void
    {
        $this->transportRepository->save($transportProduct);
    }

    private function isCorrectProductType(string $type): bool
    {
        return in_array($type, $this->transportProductTypeEnum->getTypeList(), true);
    }
}
