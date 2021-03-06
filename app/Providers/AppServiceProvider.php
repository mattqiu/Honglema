<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //view()->share('wechat', \Wechat::js());
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        if ($this->app->environment() == 'local') {
            $this->app->register('Iber\Generator\ModelGeneratorProvider');
            $this->app->register('Way\Generators\GeneratorsServiceProvider');
            $this->app->register('Xethron\MigrationsGenerator\MigrationsGeneratorServiceProvider');
        }
    }
}
