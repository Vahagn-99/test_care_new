<?php

namespace App\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see Illuminate\Support\Facades\Facade
 */
class UseCar extends Facade
{
    /**
     * Get a schema builder instance for the default connection.
     *
     * @return \Illuminate\Database\Schema\Builder
     */
    protected static function getFacadeAccessor()
    {
        return "UseCar";
    }
}
