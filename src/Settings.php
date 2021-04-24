<?php

namespace TS\Facades;

/**
 * Class Settings
 * @package TS\Facades
 */
class Settings extends Facade
{
    public static function self()
    {
        return self::$app;
    }

    public static function get(string $key = null)
    {
        if ($key === null) {
            return self::self()->getContainer()['settings'];
        } else {
            return self::self()->getContainer()['settings'][$key];
        }
    }

    public static function set(string $key, $value)
    {
        $settings = self::self()->getContainer()['settings'];
        $settings[$key] = $value;
    }
}
