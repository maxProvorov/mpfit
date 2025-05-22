<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\ProductService;
use App\Services\OrderService;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->singleton('App\\Services\\ProductService', function ($app) {
            return new \App\Services\ProductService($app->make('App\\Repositories\\ProductRepository'));
        });

        $this->app->singleton('App\\Services\\OrderService', function ($app) {
            return new \App\Services\OrderService($app->make('App\\Repositories\\OrderRepository'));
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
