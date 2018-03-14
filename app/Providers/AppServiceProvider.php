<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Settings;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('layouts.front', function($view) {
          $view->with(['settings' => Settings::firstOrFail()]);
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
