# Laravel Queue Pool

[![Latest Version on Packagist](https://img.shields.io/packagist/v/wanghanlin/laravel-queue-pool.svg?style=flat-square)](https://packagist.org/packages/wanghanlin/laravel-queue-pool)
[![Build Status](https://img.shields.io/travis/wanghanlin/laravel-queue-pool/master.svg?style=flat-square)](https://travis-ci.org/wanghanlin/laravel-queue-pool)
[![Quality Score](https://img.shields.io/scrutinizer/g/wanghanlin/laravel-queue-pool.svg?style=flat-square)](https://scrutinizer-ci.com/g/wanghanlin/laravel-queue-pool)
[![Total Downloads](https://img.shields.io/packagist/dt/wanghanlin/laravel-queue-pool.svg?style=flat-square)](https://packagist.org/packages/wanghanlin/laravel-queue-pool)

This package provide an artisan command `queue:pool` to start multiple queue worker and supervise them.

## Installation

You can install the package via composer:

```bash
composer require wanghanlin/laravel-queue-pool
```

## Usage

``` php
$skeleton = new Spatie\Skeleton();
echo $skeleton->echoPhrase('Hello, Spatie!');
```

### Testing

``` bash
composer test
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email 605231181@qq.com instead of using the issue tracker.

## Credits

- [Hanlin Wang](https://github.com/wanghanlin)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
