<?php

namespace Ayio\Ui;

use Ayio\Ui\Models\Menu;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class UiServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {

        $this->loadMigrationsFrom(__DIR__ . '/migrations');
        $this->loadViewsFrom(__DIR__ . '/views', 'ui');
        $this->publishes([
            __DIR__ . '/assets' => public_path('assets/ayio/ui'),
        ], 'ui');

        $menu = Menu::where('deleted', 0)
        ->orderBy('order')
        ->get();
        View::share('menu', $menu);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
