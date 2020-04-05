<?php
namespace TS\Facades;

class Response extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'response';
    }
}