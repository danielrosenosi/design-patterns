<?php

namespace Core\Creational\Builder\Pratical;

final class Phone
{
    public function __construct(
        protected string $ddd,
        protected string $number,
        protected bool $active = true,
    ) {}
}
