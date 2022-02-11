<?php

namespace Product;

class Bus implements ProductInterface
{
    private ?int $id;
    private string $name = '';

    public function getId(): ?int
    {
      return $this->id;
    }

    public function setId(int $id): void
    {
      $this->id = $id;
    }

    public function someOperation(): string
    {
        return 'someOperation for Bus';
    }
}
