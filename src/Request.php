<?php
namespace TS\Facades;

/**
 * Class Request
 * @package TS\Facades
 */
class Request extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'request';
    }
}