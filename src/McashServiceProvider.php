<?php


namespace Mcash\Mpesa;

use Illuminate\Support\ServiceProvider;
use Mcash\Mpesa\Contracts\ConfigurationStore;

/**
 * Class McashServiceProvider
 *
 * @category PHP
 * @package  Mcash\Mpesa
 * @author   David Ngugi <david@davidngugi.com>
*/
class McashServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {

        // TODO Publish our configs, routes, controllers, events etc etc if any
        $this->publishes([
            __DIR__.'/Config/mcash.php' => config_path('mcash.php')
        ]);

    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {

        // Bind our classes here
    }
}

