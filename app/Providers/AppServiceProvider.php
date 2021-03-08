<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
use Illuminate\Pagination\Paginator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Paginator::defaultView('components.paginator');
        Paginator::defaultSimpleView('components.paginator');

        Blade::if('role', function ($role) {
            if (auth()->user() === null) {
                return false;
            }

            return auth()->user()->role === $role;
        });
    }
}
