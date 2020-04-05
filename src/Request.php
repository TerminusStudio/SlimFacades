<?php
namespace TS\Facades;

class Request extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'request';
    }
}