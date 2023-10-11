<?php

namespace Core\Creational\Builder\Pratical;

class Address
{
    public function __construct(
        protected string $street,
        protected string $city,
        protected string $state,
        protected string $postalCode,
        protected string $country,
    ) {}
}
