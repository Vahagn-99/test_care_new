<?php

namespace App\Providers;

use App\Http\Controllers\Api\V1\UseCarController;
use Illuminate\Support\ServiceProvider;

class UseCarServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        return $this->app->bind('UseCar', UseCarController::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
