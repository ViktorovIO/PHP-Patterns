<?php

namespace Product\OS;

use Product\Transport\OSProductInterface;

class Linux implements OSProductInterface
{
    private ?int $id;
    private string $name = '';
    private string $version = '';

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function someOperation(): string
    {
        return 'someOperation for Linux';
    }

    public function getVersion(): string
    {
        return $this->version;
    }

    public function setVersion(string $version): void
    {
        $this->version = $version;
    }
}
