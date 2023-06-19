<?php

namespace core;

class App
{
    protected static $app = [];

    public static function bind($key, $value)
    {
        static::$app[$key] = $value;
    }

    public static function get($key)
    {
        if (array_key_exists($key, static::$app)) {
            return static::$app[$key];
        }

        throw new \Exception('no data found');
    }
}