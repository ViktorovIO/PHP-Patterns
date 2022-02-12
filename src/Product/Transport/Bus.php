<?php

namespace Product\Transport;

use Product\ProductInterface;

class Bus implements ProductInterface
{
    private ?int $id;
    private string $name = '';
    private int $speed = 0;

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

    public function getSpeed(): int
    {
        return $this->speed;
    }

    public function setSpeed(int $speed): void
    {
        $this->speed = $speed;
    }

    public function someOperation(): string
    {
        return 'someOperation for Bus';
    }
}
