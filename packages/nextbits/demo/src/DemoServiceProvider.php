<?php

namespace Nextbits\Demo;

use Illuminate\Support\ServiceProvider;

class DemoServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('Nextbits\Demo\DemoController');
        $this->loadViewsFrom(__DIR__.'/views', 'demo');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        include __DIR__.'/routes.php';
    }
}
