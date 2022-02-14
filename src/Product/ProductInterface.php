<?php

namespace Product;

interface ProductInterface
{
    public function getId(): ?int;
    public function setId(int $id): void;
    public function getName(): string;
    public function setName(string $name): void;
    public function someOperation(): string;
}
