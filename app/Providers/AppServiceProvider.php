<?php

namespace App\Providers;

<<<<<<< HEAD
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;
=======
use Illuminate\Support\ServiceProvider;
use Laravel\Sanctum\Sanctum;
>>>>>>> a622e73 (init)

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
<<<<<<< HEAD
        //
=======
        Sanctum::ignoreMigrations();
>>>>>>> a622e73 (init)
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
