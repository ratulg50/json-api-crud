<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Item;
class ItemModelServiceProvider extends ServiceProvider
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
        Item::observe(\App\Observers\ItemObserver::class);
    }
}
