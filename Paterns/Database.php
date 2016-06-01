<?php
/*Singlton*/

class Database
{
    private static $instance;
    private $connection;
    public static function getInstance()
    {
        if (!isset(self::$instance)) {
            self::$instance = new self();
        }
        return self::$instance;
    }
    private function __construct() {
    }
    private function __clone() {}
}
