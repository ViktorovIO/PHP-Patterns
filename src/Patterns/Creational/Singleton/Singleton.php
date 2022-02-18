<?php

namespace ViktorovIO\Library\Patterns\Creational\Singleton;

class Singleton
{
    private static self $instance;

    protected function __construct()
    {

    }

    public function getInstance(): self
    {
        if (!isset(static::$instance)) {
            static::$instance = new static();
        }

        return static::$instance;
    }
}