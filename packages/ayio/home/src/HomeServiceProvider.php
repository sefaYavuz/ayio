<?php

namespace Ayio\Home;

use Illuminate\Support\ServiceProvider;

class HomeServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/routes/backend.php');
        $this->loadRoutesFrom(__DIR__ . '/routes/frontend.php');
        $this->loadViewsFrom(__DIR__ . '/views', 'home');
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
