<?php

namespace Nkootstra\Geocode;

use Illuminate\Support\ServiceProvider;

class GeocodeServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('Nkootstra\Geocode\GeoCode');
    }
}
