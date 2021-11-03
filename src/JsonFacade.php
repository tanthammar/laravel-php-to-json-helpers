<?php

namespace Tanthammar\Json;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Tanthammar\Json\Json
 */
class JsonFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-php-to-json-helpers';
    }
}
