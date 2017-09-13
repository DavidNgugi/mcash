<?php


namespace Mcash\Pesa;

use Illuminate\Support\ServiceProvider;
use Mcash\Pesa\Data\LoadConfig;

/**
 * Class McashServiceProvider
 *
 * @category PHP
 * @package  Mcash\Pesa
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
