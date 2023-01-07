<?php

declare(strict_types=1);
/**
 * happy coding!!!
 */
namespace Smalldb;

use InvalidArgumentException;

/**
 * @method open(string $path)
 * @method get(string $key)
 * @method put(string $key,$value)
 * @method delete(string $key)
 * @method keys()
 * @method fold(callable $callback)
 * @method merge(string $path)
 * @method sync()
 * @method close()
 */
class Smalldb
{
    protected static ?Database $database;

    public static function __callStatic(string $name, array $arguments)
    {
        if (! method_exists(self::$database, $name)) {
            throw new InvalidArgumentException('The called method does not exist!');
        }

        return self::$database->{$name}(...$arguments);
    }

    protected static function getDatabase(): Database
    {
        if (is_null(self::$database)) {
            self::$database = new Database();
        }

        return self::$database;
    }
}
