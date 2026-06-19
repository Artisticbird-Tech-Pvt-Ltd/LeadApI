<?php

namespace ArtisticBird\LeadApi;

use Illuminate\Support\ServiceProvider;

class LeadApiServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/../config/leadapi.php',
            'leadapi'
        );

        $this->app->singleton('leadapi', function () {
            return new LeadApi();
        });
    }

    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/leadapi.php' =>
                config_path('leadapi.php'),
        ], 'leadapi-config');
    }
}