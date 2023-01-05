<?php

namespace App\Providers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * @return void
     */
    public function boot()
    {
        Model::shouldBeStrict(! app()->isProduction());
    }
}
