<?php

namespace SoftwaresCares\SuperBlog;

use Illuminate\Support\ServiceProvider;

use SoftwaresCares\SuperBlog\Console\Commands\SuperBlogInstaller;

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
            __DIR__.'/superblog' => public_path('superblog'),
        ], 'public');

        $this->publishes([
            __DIR__.'/superblog-vue-components' => public_path('../resources/js/softwarescares/superblog'),
        ], 'superblog-components');

       // Register the command if we are using the application via the CLI
       if ($this->app->runningInConsole()) {
           $this->commands([
             SuperBlogInstaller::class,
           ]);
       }
       }
}
