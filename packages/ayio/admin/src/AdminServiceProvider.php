<?php

namespace Ayio\Admin;

use Illuminate\Support\ServiceProvider;

class AdminServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/routes/frontend.php');
        $this->loadViewsFrom(__DIR__ . '/views', 'admin');
        $this->publishes([
            __DIR__ . '/assets' => public_path('assets/ayio/admin'),
        ], 'admin');
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
