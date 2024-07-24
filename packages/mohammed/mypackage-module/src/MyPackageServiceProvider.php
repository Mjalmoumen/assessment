<?php

namespace App\Providers;
namespace Mohammed\MyPackageModule;

use Illuminate\Support\ServiceProvider;

class MyPackageServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register()
    {
        $this->app->bind(ProductSearchService::class, function ($app) {
            return new ProductSearchService();
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot():void
    {
        $this->loadViewsFrom(__DIR__.'/resources/views', 'mypackage-module');
        $this->loadRoutesFrom(__DIR__.'/routes/routes.php');
    }
}
