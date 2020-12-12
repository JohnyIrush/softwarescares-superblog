<?php

namespace SoftwaresCares\SuperBlog;

use Illuminate\Support\ServiceProvider;

class SuperblogServiceProvider extends ServiceProvider
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
        //
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/views', 'superblog');
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
        $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'superblog');
        $this->publishes([
            __DIR__.'/../public' => public_path('vendor/superblog'),
        ], 'public');

    }
}
