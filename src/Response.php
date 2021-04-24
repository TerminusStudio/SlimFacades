<?php
namespace TS\Facades;

/**
 * Class Response
 * @package TS\Facades
 */
class Response extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'response';
    }
}