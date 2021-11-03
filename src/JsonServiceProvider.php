<?php

namespace Tanthammar\Json;

use Illuminate\Support\Facades\Blade;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class JsonServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package->name('laravel-php-to-json-helpers');
    }

    public function bootingPackage()
    {
        /**
         * Compile a PHP expression into a DOUBLE-quoted JavaScript object, array, boolean or  string.
         */
        Blade::directive('jsonEncode', function ($expression) {
            return "<?php echo Tanthammar\Json::encode($expression) ?>";
        });

        /**
         * Compile a PHP expression into a SINGLE-quoted JavaScript object, array, boolean or  string.
         */
        Blade::directive('jsonParse', function ($expression) {
            return "<?php echo Tanthammar\Json::parse($expression) ?>";
        });

        /**
         * Compile a PHP boolean into JavaScript true/false.
         */
        Blade::directive('jsonBool', function ($expression) {
            return "<?php echo Tanthammar\Json::bool($expression) ?>";
        });

        /**
         * Compile a PHP string into a SINGLE-quoted JavaScript string.
         */
        Blade::directive('jsonStr', function ($expression) {
            return "<?php echo Tanthammar\Json::str($expression) ?>";
        });

    }
}
