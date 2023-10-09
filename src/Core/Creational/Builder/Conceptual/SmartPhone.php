<?php

namespace Core\Creational\Builder\Conceptual;

abstract class SmartPhone
{
    public function __construct(
        protected ?string $gpu = null,
        protected ?string $cpu = null,
        protected ?int $ram = null,
        protected ?string $model = null,
        protected ?array $sensors = null,
    ) {}

    public function __set($name, $value): void
    {
        $this->{$name} = $value;
    }

    public function __get($name): mixed
    {
        return $this->{$name};
    }
}
