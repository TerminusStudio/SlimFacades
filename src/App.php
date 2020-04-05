<?php
namespace TS\Facades;

class App extends Facade
{
    public static function self()
    {
        return self::$app;
    }
}