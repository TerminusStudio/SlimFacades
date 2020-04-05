# InstaAPI

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

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/TerminusStudio/SlimFacades.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/TerminusStudio/SlimFacades.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/TerminusStudio/SlimFacades
[link-downloads]: https://packagist.org/packages/TerminusStudio/SlimFacades
[link-author]: https://github.com/TerminusStudio