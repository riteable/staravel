<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Arr as BaseArr;
use App\Support\Arr;

class ArrMacroServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        BaseArr::macro('deepSearch', function ($array, $key, $value, $returnFirst = false) {
            return Arr::deepSearch(...func_get_args());
        });
    }
}
