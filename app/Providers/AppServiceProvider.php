<?php

namespace App\Providers;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register()
    {
        //
    }

    // DEKLARASIKAN BOOTSTRAP
    public function boot()
    {
        Paginator::useBootstrapFive();
    }
}
