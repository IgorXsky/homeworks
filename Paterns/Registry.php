<?php
/*Registry*/

class Registry
{
    private static $data = [];
    public static function get($key, $default = null)
    {
        if (!isset(self::$data[$key])){
            if (isset($default)) {
                return $default;
            }
            throw new Exception();
        }
        return self::$data[$key];
    }
    public static function set($key, $value)
    {
        self::$data[$key] = $value;
    }
}