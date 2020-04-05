<?php
namespace TS\Facades;

class Facade
{
    public static $app;

    public static function setFacadeApplication($app)
    {
        Facade::$app = $app;
    }

    public static function __callStatic($method, $args)
    {
        if (is_object(static::getFacadeAccessor())) {
            return static::getFacadeAccessor()->$method(...$args);
        }

        return static::self()->$method(...$args);
    }

    protected static function getFacadeAccessor()
    {
        return '';
    }

    public static function self()
    {
        return Facade::$app->getContainer()->get(static::getFacadeAccessor());
    }
}