<?php

namespace dgtlss\spinner;

use Illuminate\Support\ServiceProvider;

class SpinnerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('spinner', function($app){
            return new Spinner;
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
    /**
         * Register the application services.
         *
         * @return Spinner
    */
    }
}
