<?php

namespace TS\Facades;

class Container extends Facade
{
    public static function self()
    {
        return self::$app->getContainer();
    }
}