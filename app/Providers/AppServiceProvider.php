<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\UpdateService;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(UpdateService::class, function () {
            return new UpdateService();
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
