<?php

namespace App\Providers;

use App\Services\Vehicle\VehicleService;
use App\Services\Vehicle\VehicleServiceInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(VehicleServiceInterface::class,VehicleService::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
