<?php

namespace Core\Creational\Singleton\Conceptual;

class Singleton
{
    private static array $instances;

    protected function __construct() {}

    protected function __clone() {}

    public function __sleep(): array
    {
        throw new \Exception("Cannot serialize singleton");

        return [];
    }

    public function __wakeup(): void
    {
        throw new \Exception("Cannot unserialize singleton");
    }

    public static function getInstance()
    {
        $cls = static::class;

        if (!isset(static::$instances[$cls])) {
            static::$instances[$cls] = new static();
        }

        return static::$instances[$cls];
    }
}

class DbConnection extends Singleton
{
    public function connect()
    {
        echo "Connected to database";
    }
}
