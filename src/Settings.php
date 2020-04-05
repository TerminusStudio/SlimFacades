<?php
namespace TS\Facades;
//TODO: update this class to support slim 4 PHP-DI
class Settings extends Facade
{
    public static function self()
    {
        return self::$app;
    }

    public static function get($key = null)
    {
        if ($key === null) {
            return self::self()->getContainer()['settings'];
        } else {
            return self::self()->getContainer()['settings'][$key];
        }
    }

    public static function set($key, $value)
    {
        if (is_array($key)) {
            $now = self::self()->getContainer()['settings'];
            foreach ($key as $item) {
                $now = $now[$item];
            }
            $now = $value;
        } else {
            $settings = self::self()->getContainer()['settings'];
            $settings[$key] = $value;
        }
    }
}
