<?php
namespace TS\Facades;

/**
 * Class View
 * @package TS\Facades
 *
 * @method static fetch(string $template, array $data = [], bool $useLayout = false): string
 * @method static render($response, $template, $data = []): \Psr\Http\Message\ResponseInterface
 */
class View extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'view';
    }
}