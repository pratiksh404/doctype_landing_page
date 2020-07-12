<?php

namespace doctype_admin\Landing;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class LandingServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->registerPublishing();
        }
        $this->registerResources();
    }

    public function register()
    {
        /* Config file publish */
        $this->publishes([
            __DIR__ . '/../config/landing.php' => config_path('landing.php')
        ], 'landing-config');
        /* Views File Publish */
        $this->publishes([
            __DIR__ . '/../resources/views' => resource_path('views/vendor/landing'),
        ], 'landing-views');
        /* Migration File Publish */
        $this->publishes([
            __DIR__ . '/../database/migartions' => database_path('migrations')
        ], 'landing-migrations');
        /* Seed File Publish */
        $this->publishes([
            __DIR__ . '/../database/seeds' => database_path('seeds')
        ], 'landing-seeds');
    }

    public function registerResources()
    {
        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');
        $this->loadFactoriesFrom(__DIR__ . '/../database/factories');
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'landing');
        $this->registerRoutes();
    }

    public function registerPublishing()
    { }

    public function registerRoutes()
    {
        Route::group($this->routeConfiguration(), function () {
            $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');
        });
    }

    public function routeConfiguration()
    {
        return [
            'prefix' => config('landing.prefix', 'admin'),
            'namespace' => 'doctype_admin\Landing\Http\Controllers',
            'middleware' => config('landing.middleware', ['web', 'auth', 'activity', 'role:admin'])
        ];
    }
}
