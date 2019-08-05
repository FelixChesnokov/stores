<?php

namespace App\Providers;

use App\Services\BotService;
use App\Services\StoreService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('StoreService', function () {
            return new StoreService();
        });
        $this->app->singleton('BotService', function () {
            return new BotService();
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
