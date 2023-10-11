<?php

use Core\Creational\Builder\Conceptual\Request\BuilderRequest;
use Core\Creational\Builder\Conceptual\Enums\MethodsEnum;
use Core\Creational\Singleton\Conceptual\Singleton;

require_once '../vendor/autoload.php';

$instanceA = Singleton::getInstance();
$instanceB = Singleton::getInstance();

var_dump($instanceA === $instanceB); // true
