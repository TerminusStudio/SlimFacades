<?php
namespace TS\Facades;

class Router extends Facade
{
    public static function self()
    {
        return self::$app->getRouteCollector();
    }
}