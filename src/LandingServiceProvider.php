<?php

namespace doctype_admin\Landing;

use doctype_admin\Landing\Http\Livewire\Banner;
use doctype_admin\Landing\Http\Livewire\Feature;
use doctype_admin\Landing\Http\Livewire\Footer;
use doctype_admin\Landing\Http\Livewire\Mobile;
use doctype_admin\Landing\Http\Livewire\Plan;
use doctype_admin\Landing\Http\Livewire\Service;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;

class LandingServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->registerPublishing();
        }
        $this->registerResources();
        $this->registerComponents();
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
        $this->publishes([
            __DIR__ . '/../resources/assets' => public_path('vendor/landing')
        ], 'landing-frontend');
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

        Route::group(['namespace' => 'doctype_admin\Landing\Http\Controllers\Frontend'], function () {
            $this->loadRoutesFrom(__DIR__ . '/../routes/landing.php');
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

    public function registerComponents()
    {
        Livewire::component('banner', Banner::class);
        Livewire::component('service', Service::class);
        Livewire::component('feature', Feature::class);
        Livewire::component('plan', Plan::class);
        Livewire::component('footer', Footer::class);
        Livewire::component('mobile', Mobile::class);
    }
}
