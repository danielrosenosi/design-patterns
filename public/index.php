<?php

use Core\Creational\Builder\Conceptual\Request\BuilderRequest;
use Core\Creational\Builder\Conceptual\Enums\MethodsEnum;

require_once '../vendor/autoload.php';

$request = (new BuilderRequest())
            ->url('http://localhost:8080/api/v1/users')
            ->method(MethodsEnum::GET)
            ->payload(['filters' => 'name'])
            ->build();
