<?php

namespace Core\Creational\Builder\Conceptual\Request;

use Core\Creational\Builder\Conceptual\Enums\MethodsEnum;

class Request
{
    public function __construct(
        public ?string $url = null,
        public ?array $payload = null,
        public ?MethodsEnum $method = null,
    ) {}
}
