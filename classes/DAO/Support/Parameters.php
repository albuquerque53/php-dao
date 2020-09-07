<?php

namespace Access\DAO\Support;

class Parameters
{
    public static function set($statement, array $parameters = [])
    {
        foreach ($parameters as $key => $value) {
            self::binder($statement, $key, $value);
        }
    }

    private static function binder($statement, $key, $value)
    {
        $statement->bindParam($key, $value);
    }
}
