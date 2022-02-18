<?php

namespace ViktorovIO\Library\Product\OS;

use ViktorovIO\Library\Product\ProductInterface;

interface OSProductInterface extends ProductInterface
{
    public function getId(): ?int;
    public function setId(int $id): void;
    public function getName(): string;
    public function setName(string $name): void;

    public function getVersion(): string;
    public function setVersion(string $version): void;
}
