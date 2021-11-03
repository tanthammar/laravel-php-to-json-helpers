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

## Usage

```blade
<div x-data="{ foo: @jsonParse(['hi' => 'hello']) }"></div>

<x-foo x-data="{ 
    foo: {{ Tanthammar\Json::parse(['hi' => 'hello']) }} 
}"></x-foo>
```
