<?php
namespace TS\Facades;

/**
 * Class App
 * @package TS\Facades
 */
class App extends Facade
{
    public static function self()
    {
        return self::$app;
    }
}