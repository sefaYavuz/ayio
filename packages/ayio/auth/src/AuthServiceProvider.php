<?php

namespace Ayio\Auth;

use Illuminate\Support\ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__ . '/database/migrations');
        $this->loadRoutesFrom(__DIR__ . '/routes/frontend.php');
        $this->loadViewsFrom(__DIR__ . '/views', 'auth');
        $this->publishes([
            __DIR__ . '/assets' => public_path('assets/ayio/auth'),
        ], 'auth');
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
