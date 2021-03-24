<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

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
        \App\Models\Item::creating(function($model){
            $model->name = strtoupper($model->name);
        });

        \App\Models\Item::updating(function($model){
            $model->name = strtolower($model->name);
        });
    }
}
