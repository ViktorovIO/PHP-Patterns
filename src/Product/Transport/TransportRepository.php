<?php

namespace Product\Transport;

use Doctrine\DBAL\Connection;
use Exception;
use Product\Enum\TransportProductTypeEnum;

class TransportRepository
{
    private Connection $dbal;

    public function __construct(Connection $dbal)
    {
        $this->dbal = $dbal;
    }

    public function getById(int $id): ?TransportProductInterface
    {
        $statement = $this->dbal->fetchAssoc(<<<SQL
SELECT
    id,
    type,
    name,
    speed
FROM
    transport
WHERE
    id = :id
SQL,
            ['id' => $id]
        );

        try {
            $result = $statement ? $this->makeEntity($statement) : null;
        } catch (Exception $e) {
            return null;
        }

        return $result;
    }

    /** @return TransportProductInterface[] */
    public function getByType(int $id): array
    {
        $statement = $this->dbal->fetchAll(<<<SQL
SELECT
    id,
    type,
    name,
    speed
FROM
    transport
WHERE
    id = :id
SQL,
            ['id' => $id]
        );

        $result = [];
        foreach ($statement as $item) {
            try {
                $result[] = $this->makeEntity($item);
            } catch (Exception $e) {
                return [];
            }
        }

        return $result;
    }

    public function save(TransportProductInterface $product): void
    {
        $this->dbal->executeUpdate(<<<SQL
INSERT INTO
    transport
SET
    id = :id,
    type = :type,
    name = :name,
    speed = :speed
ON DUPLICATE KEY UPDATE
    type = :type,
    name = :name,
    speed = :speed
SQL,
            [
                'id' => $product->getId() ?? null,
                'type' => $product->getType(),
                'name' => $product->getName(),
                'speed' => $product->getSpeed(),
            ]
        );

        if ($product->getId() === null) {
            $product->setId($this->dbal->lastInsertId());
        }
    }

    private function makeEntity(array $result): TransportProductInterface
    {
        switch ($result['type']) {
            case TransportProductTypeEnum::CAR:
                $product = new Car();
            case TransportProductTypeEnum::BUS:
                $product = new Bus();
            case TransportProductTypeEnum::BIKE:
                $product = new Bike();
            default:
                throw new Exception('Unknown type');
        }

        /** @var TransportProductInterface $product */
        $product->setId($result['id']);
        $product->setType($result['type']);
        $product->setName($result['name']);
        $product->setSpeed($result['speed']);

        return $product;
    }
}