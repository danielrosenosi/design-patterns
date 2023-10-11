<?php

use Core\Creational\Builder\Conceptual\Request\BuilderRequest;
use Core\Creational\Builder\Conceptual\Enums\MethodsEnum;
use Core\Creational\Singleton\Conceptual\Singleton;
use Core\Creational\Singleton\Pratical\DbConnection;

require_once '../vendor/autoload.php';

/* Conceptual - Singleton
 *
 * $instanceA = Singleton::getInstance();
 * $instanceB = Singleton::getInstance();
 *
 * var_dump($instanceA === $instanceB); -> Retorna true
 * */


/* Pratical - Singleton
 *
 * $instanceA = DbConnection::getInstance();
 * $instanceB = DbConnection::getInstance();
 *
 * var_dump($instanceA === $instanceB); -> Retorna true
 * */

