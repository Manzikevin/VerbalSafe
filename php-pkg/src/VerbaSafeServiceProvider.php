<?php

namespace VerbaSafe\Core;

use Illuminate\Support\ServiceProvider;

class VerbaSafeServiceProvider extends ServiceProvider
{
    /**
     * Register the service in the Laravel container.
     */
    public function register()
    {
        // This allows users to type-hint 'Filter' in their controllers
        $this->app->singleton(Filter::class, function ($app) {
            return new Filter();
        });
    }

    /**
     * Bootstrap any package services.
     */
    public function boot()
    {
        // add logic to publish the dictionaries 
        // to the Laravel 'resources' folder for users to edit them.
    }
}
