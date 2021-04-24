<?php
namespace TS\Facades;

/**
 * Class Router
 * @package TS\Facades
 *
 * Facade class for accessing \Slim\Interfaces\RouteCollectorInterface
 *
 * @method static getRouteParser(): \Slim\Interfaces\RouteParserInterface
 * @method static getDefaultInvocationStrategy(): \Slim\Interfaces\InvocationStrategyInterface
 * @method static setDefaultInvocationStrategy(InvocationStrategyInterface $strategy): \Slim\Interfaces\RouteCollectorInterface
 * @method static getCacheFile(): ?string
 * @method static setCacheFile(string $cacheFile): \Slim\Interfaces\RouteCollectorInterface
 * @method static getBasePath(): string
 * @method static setBasePath(string $basePath): \Slim\Interfaces\RouteCollectorInterface
 * @method static getRoutes(): array;
 * @method static getNamedRoute(string $name): \Slim\Interfaces\RouteInterface;
 * @method static removeNamedRoute(string $name): \Slim\Interfaces\RouteCollectorInterface;
 * @method static lookupRoute(string $identifier): \Slim\Interfaces\RouteInterface;
 * @method static group(string $pattern, $callable): \Slim\Interfaces\RouteGroupInterface;
 * @method static map(array $methods, string $pattern, $handler): \Slim\Interfaces\RouteInterface;
 */
class Router extends Facade
{
    public static function self()
    {
        return self::$app->getRouteCollector();
    }
}