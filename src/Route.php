<?php

namespace TS\Facades;

use Psr\Http\Message\UriInterface;

/**
 * Class Route
 * @package TS\Facades
 *
 * @method static getResponseFactory(): \Psr\Http\Message\ResponseFactoryInterface
 * @method static setCallableResolver(): \Slim\Interfaces\CallableResolverInterface
 * @method static getContainer(): \Psr\Container\?ContainerInterface
 * @method static getRouteCollector(): \Slim\Interfaces\RouteCollectorInterface
 * @method static getBasePath(): string
 * @method static setBasePath(string $basePath): \Slim\Interfaces\RouteCollectorProxyInterface
 * @method static get(string $pattern, $callable): \Slim\Interfaces\RouteInterface
 * @method static post(string $pattern, $callable): \Slim\Interfaces\RouteInterface
 * @method static put(string $pattern, $callable): \Slim\Interfaces\RouteInterface
 * @method static patch(string $pattern, $callable): \Slim\Interfaces\RouteInterface
 * @method static delete(string $pattern, $callable): \Slim\Interfaces\RouteInterface
 * @method static options(string $pattern, $callable): \Slim\Interfaces\RouteInterface
 * @method static any(string $pattern, $callable): \Slim\Interfaces\RouteInterface
 * @method static map(array $methods, string $pattern, $callable): \Slim\Interfaces\RouteInterface
 * @method static group(string $pattern, $callable): \Slim\Interfaces\RouteGroupInterface
 * @method static redirect(string $from, $to, int $status = 302): \Slim\Interfaces\RouteInterface
 */
class Route extends Facade
{
    public static function self()
    {
        return self::$app;
    }

    public static function urlFor(string $routeName, array $data = [], array $queryParams = []): string
    {
        return Router::getRouteParser()->urlFor($routeName, $data, $queryParams);
    }

    public static function relativeUrlFor(string $routeName, array $data = [], array $queryParams = []): string
    {
        return Router::getRouteParser()->relativeUrlFor($routeName, $data, $queryParams);
    }

    public function fullUrlFor(UriInterface $uri, string $routeName, array $data = [], array $queryParams = []): string
    {
        return Router::getRouteParser()->fullUrlFor($uri, $routeName, $data, $queryParams);
    }
}