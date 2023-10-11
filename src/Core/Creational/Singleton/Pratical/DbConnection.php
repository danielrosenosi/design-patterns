<?php

namespace Core\Creational\Singleton\Pratical;

use PDO;
class DbConnection extends Singleton
{
    private ?PDO $connection = null;

    protected function __construct()
    {
        $this->connection = PDO('mysql:host=localhost;dbname=database', 'root', 'root');
    }

    public static function getConnection(): PDO
    {
        $instance = static::getInstance();

        return $instance->connection;
    }
}
