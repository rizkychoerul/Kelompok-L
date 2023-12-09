<?php

namespace App\Providers;

use App\View\Components\Button;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class CustomServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot()
    {
        Blade::component('custom-btn', Button::class);
    }
}
