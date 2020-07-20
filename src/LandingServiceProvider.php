<?php

namespace doctype_admin\Landing;

use Livewire\Livewire;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use doctype_admin\Landing\Models\Landing;
use doctype_admin\Landing\Http\Livewire\Plan;
use doctype_admin\Landing\Http\Livewire\About;
use doctype_admin\Landing\Http\Livewire\Banner;
use doctype_admin\Landing\Http\Livewire\Contact;
use doctype_admin\Landing\Http\Livewire\Mobile;
use doctype_admin\Landing\Http\Livewire\Feature;
use doctype_admin\Landing\Http\Livewire\Service;

class LandingServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->registerPublishing();
        }
        $this->registerResources();
        $this->registerComponents();
        $this->registerViewComposer();
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
        $this->publishes([
            __DIR__ . '/../resources/assets/img' => public_path('storage/uploads/landing')
        ], 'landing-img');
    }

    public function registerResources()
    {
        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');
        $this->loadFactoriesFrom(__DIR__ . '/../database/factories');
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'landing');
        $this->registerRoutes();
    }

    public function registerPublishing()
    {
        $this->commands([
            Console\DoctypeAdminLandingInstallerCommand::class
        ]);
    }

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
        Livewire::component('mobile', Mobile::class);
        Livewire::component('about', About::class);
        Livewire::component('contact', Contact::class);
    }

    public function registerViewComposer()
    {
        view()->composer('landing::frontend.layouts.footer', function ($view) {
            $view->with('landing', Landing::first(['landing_about', 'landing_facebook', 'landing_instagram', 'landing_messenger', 'landing_github', 'landing_linkedin', 'landing_email', 'landing_patreon']));
        });
    }
}
