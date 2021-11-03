<?php

namespace Tanthammar\Json;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Tanthammar\Json\Commands\JsonCommand;

class JsonServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-php-to-json-helpers')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-php-to-json-helpers_table')
            ->hasCommand(JsonCommand::class);
    }
}
