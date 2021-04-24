# Slim Facades

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Total Downloads][ico-downloads]][link-downloads]

Facades for Slim PHP Framework.

## Install

Via Composer

``` bash
$ composer require terminusstudio/slimfacades
```

## Usage

### Initializing 
``` php
$app = Slim\Factory\AppFactory::create();
TS\Facades\Facade::setFacadeApplication($app);
```

### Example Usage

``` php
use TS\Facades\Route;

Route::get('/', function ($request, $response) {
    ...
});
```

You can make use of the PHPDoc methods in most of the facade classes if you have IntelliSense/Code Completion enabled in your IDE. The PHPDoc comments support Slim functions and some other general PSR11 specific functions.

### Extending

Easily add more functionality by extending from the `Facade` class. 

``` php
use TS\Facades\Facade;

class Log extends Facade 
{
    public static function self()
    {
        return new Logger();
    }
}
```

Alternatively, you could also access the container by overriding the `getFacadeAccessor` method and returning the id/key of the object in the container.

``` php
use TS\Facades\Facade;

class Log extends Facade 
{
    public static function getFacadeAccessor()
    {
        return 'logger'; 
    }
}
```

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/TerminusStudio/SlimFacades.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/TerminusStudio/SlimFacades.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/TerminusStudio/SlimFacades
[link-downloads]: https://packagist.org/packages/TerminusStudio/SlimFacades
[link-author]: https://github.com/TerminusStudio
