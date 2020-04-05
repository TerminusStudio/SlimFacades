<?php
namespace TS\Facades;

class View extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'view';
    }
}