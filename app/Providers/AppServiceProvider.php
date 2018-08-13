<?php

namespace App\Providers;

use App\Observers\PhotoObserver;
use App\Observers\VegetableObserver;
use App\Photo;
use App\Vegetable;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        Vegetable::observe(VegetableObserver::class);
        Photo::observe(PhotoObserver::class);
        
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
