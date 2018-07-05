<?php

namespace App\Providers;

use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\User;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        if($this->app->environment('production')) {
            $this->app['request']->server->set('HTTPS', true);
        }
        Schema::defaultStringLength(191);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
         \Blade::if('Logged', function() {
            // “auth” es el sistema de autenticación que estamos utilizando
            // y “check” nos dice si el usuario está o no autentificado
            return auth()->check();
        });
    }
}
