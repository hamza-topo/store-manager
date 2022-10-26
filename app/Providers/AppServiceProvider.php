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
        $this->loadHelpers();
        
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadHelpers();

    }

    protected function loadHelpers()
    {
        foreach (glob(__DIR__ . '/../Helpers/Functions/*.php') as $filename) {
            require_once $filename;
        }
    }
}
