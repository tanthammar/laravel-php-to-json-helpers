# Laravel PHP to Json helpers

[![Latest Version on Packagist](https://img.shields.io/packagist/v/tanthammar/laravel-php-to-json-helpers.svg?style=flat-square)](https://packagist.org/packages/tanthammar/laravel-php-to-json-helpers)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/tanthammar/laravel-php-to-json-helpers/run-tests?label=tests)](https://github.com/tanthammar/laravel-php-to-json-helpers/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/tanthammar/laravel-php-to-json-helpers/Check%20&%20fix%20styling?label=code%20style)](https://github.com/tanthammar/laravel-php-to-json-helpers/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/tanthammar/laravel-php-to-json-helpers.svg?style=flat-square)](https://packagist.org/packages/tanthammar/laravel-php-to-json-helpers)

Laravel Blade directives and methods to compile PHP expressions into single-quoted JavaScript objects, arrays, booleans and strings.

## Installation

You can install the package via composer:

```bash
composer require tanthammar/laravel-php-to-json-helpers
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --provider="Tanthammar\Json\JsonServiceProvider" --tag="laravel-php-to-json-helpers-migrations"
php artisan migrate
```

You can publish the config file with:
```bash
php artisan vendor:publish --provider="Tanthammar\Json\JsonServiceProvider" --tag="laravel-php-to-json-helpers-config"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

```php
$laravel-php-to-json-helpers = new Tanthammar\Json();
echo $laravel-php-to-json-helpers->echoPhrase('Hello, Tanthammar!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Tina Hammar](https://github.com/tanthammar)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
