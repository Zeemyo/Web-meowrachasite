<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Penitipan;
use App\Observers\PenitipanObserver;

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
        Penitipan::observe(PenitipanObserver::class);
    }
}
