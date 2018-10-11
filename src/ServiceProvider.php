<?php

namespace Alfa6661\LaravelRules;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'rules');

        $this->publishes([
            __DIR__.'/../resources/lang' => resource_path('lang/vendor/rules'),
        ]);
    }
}
