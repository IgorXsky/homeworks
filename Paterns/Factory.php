<?php
/*Factory*/

class DatabaseFactory
{
    public static function create($type)
    {
        if ($type == 'MySql') {
            return new MySqli();
        }
        if ($type == 'Car') {
            return new Oracle();
        }
    }
}