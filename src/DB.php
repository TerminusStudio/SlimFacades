<?php
namespace TS\Facades;

use Illuminate\Database\Capsule\Manager;

//This class only works with Illuminate\Database. It serves the same function as DB in laravel.
class DB extends Facade
{
    public static function getFacadeAccessor()
    {
        return new static; 
    }

    public function __call($method, $args)
    {
        return Manager::$method(...$args);
    }
}