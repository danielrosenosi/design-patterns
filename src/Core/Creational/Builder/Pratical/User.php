<?php

namespace Core\Creational\Builder\Pratical;

use Core\Creational\Builder\Pratical\Enums\RoleEnum;

class User
{
    public function __construct(
        protected string $firstName,
        protected string $lastName,
        protected string $email,
        protected int $age,
        protected RoleEnum $role,
        protected bool $active = false,
        protected ?Address $address = null,
        protected ?Phone $phone = null,
    ) {}

    public function setAddress(Address $address): void
    {
        $this->address = $address;
    }
}
