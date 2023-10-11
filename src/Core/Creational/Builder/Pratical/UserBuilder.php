<?php

namespace Core\Creational\Builder\Pratical;

use Core\Creational\Builder\Pratical\Enums\RoleEnum;

class UserBuilder implements UserBuilderInterface
{
    private ?User $user = null;

    public function __construct()
    {
        $this->reset();
    }

    public function reset(): void
    {
        $this->user = null;
    }

    public function setBasicInfo(
        string $firstName,
        string $lastName,
        string $email,
        int $age,
        RoleEnum $role,
        bool $active = false,
        Address $address = null,
        Phone $phone = null,
    ): UserBuilderInterface {
        $this->user = new User(
            $firstName,
            $lastName,
            $email,
            $age,
            $role,
            $active,
            $address,
            $phone,
        );

        return $this;
    }

    public function addAddress(
        string $street,
        string $number,
        string $complement,
        string $district,
        string $city,
        string $state,
        string $country,
        string $zipCode,
    ): UserBuilderInterface {
        $this->user->setAddress(
            new Address(
                $street,
                $number,
                $complement,
                $district,
                $city,
                $state,
                $country,
                $zipCode,
            )
        );

        return $this;
    }

    public function addPhone(
        int $ddd,
        int $number,
        bool $active = true,
    ): UserBuilderInterface {
        $this->user->setPhone(
            new Phone(
                $ddd,
                $number,
                $active,
            )
        );

        return $this;
    }

    public function build(): User
    {
        return $this->user;
    }
}
