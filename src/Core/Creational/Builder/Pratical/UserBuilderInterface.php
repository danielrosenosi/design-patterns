<?php

namespace Core\Creational\Builder\Pratical;

use Core\Creational\Builder\Pratical\Enums\RoleEnum;

interface UserBuilderInterface
{
    public function reset(): void;

    public function setBasicInfo(
        string $firstName,
        string $lastName,
        string $email,
        int $age,
        RoleEnum $role,
        bool $active = false,
        Address $address = null,
        Phone $phone = null,
    ): UserBuilderInterface;

    public function addAddress(
        string $street,
        string $number,
        string $complement,
        string $district,
        string $city,
        string $state,
        string $country,
        string $zipCode,
    ): UserBuilderInterface;

    public function addPhone(
        int $ddd,
        int $number,
        bool $active = true,
    ): UserBuilderInterface;

    public function build(): User;
}

