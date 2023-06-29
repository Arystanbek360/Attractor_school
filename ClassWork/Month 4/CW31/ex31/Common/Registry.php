<?php
namespace ex31\Common;

class Registry
{
    private static $container = [];

    /**
     * @param $key
     * @param $value
     * @throws \Exception
     */
    public static function set($key, $value)
    {
        if (!isset(self::$container[$key])) {
            self::$container[$key] = $value;
        } else {
            throw new \Exception('Element with key = "' . $key . '" already defined');
        }
    }

    public static function get($key)
    {
        return self::$container[$key];
    }
}
