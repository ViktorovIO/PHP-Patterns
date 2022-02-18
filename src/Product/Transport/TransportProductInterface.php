<?php

namespace ViktorovIO\Library\Product\Transport;

use ViktorovIO\Library\Product\ProductInterface;

interface TransportProductInterface extends ProductInterface
{
    public function getId(): ?int;
    public function setId(int $id): void;
    public function getName(): string;
    public function setName(string $name): void;

    public function getType(): string;
    public function setType(string $type): void;
    public function getSpeed(): int;
    public function setSpeed(int $speed): void;
}
