<?php

namespace Product\Transport;

use Product\ProductInterface;

interface OSProductInterface extends ProductInterface
{
    public function getId(): ?int;
    public function setId(int $id): void;
    public function getName(): string;
    public function setName(string $name): void;

    public function getVersion(): string;
    public function setVersion(string $version): void;
}