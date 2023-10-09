<?php

namespace Core\Creational\Builder\Conceptual;

class SmartPhoneCreator
{
    public function __construct(
        protected SmartPhoneInterface $smartPhone,
    ) {}

    public function buildPhone(): SmartPhoneInterface
    {
        $this->smartPhone->addGpu();
        $this->smartPhone->addCpu();
        $this->smartPhone->addRam();
        $this->smartPhone->addModel();
        $this->smartPhone->addSensors();

        return $this->smartPhone->getSmartPhone();
    }

    public function buildPhoneWithOnlyGpu(): SmartPhoneInterface
    {
        $this->smartPhone->addGpu();

        return $this->smartPhone->getSmartPhone();
    }
}
