<?php
namespace TS\Facades;

class Log extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'logger';
    }
}