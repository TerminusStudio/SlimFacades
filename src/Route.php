<?php
namespace TS\Facades;

class Route extends Facade
{
    public static function self()
    {
        return self::$app;
    }
}