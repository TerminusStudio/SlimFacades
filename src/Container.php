<?php

namespace TS\Facades;

/**
 * Class Container
 * @package TS\Facades
 *
 * @method static has($name)
 * @method static get($name)
 * @method static set($name, $value)
 * The set method is NOT defined in PSR11 ContainerInterface.
 */
class Container extends Facade
{
    public static function self()
    {
        return self::$app->getContainer();
    }
}