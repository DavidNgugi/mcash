<?php

namespace DavidNgungi\Mcash;

use Illuminate\Support\ServiceProvider;

class McashServiceProvider extends ServiceProvider
{

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {

    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(Mcash::class, function () {
            return new Mcash();
        });

        $this->app->alias(Mcash::class, 'mcash');
    }
}