<?php

namespace LaravelArab\DataSource;

use Illuminate\Support\ServiceProvider;

class DataSourceServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/publishes/config/config.php' => config_path('datasource.php'),
        ], 'config');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $packageConfigFile = __DIR__.'/publishes/config/config.php';

        /*$this->mergeConfigFrom(
            $packageConfigFile, 'datasource'
        );*/

        $this->app->singleton(DataSource::class, function () {
            return new DataSource();
        });

        $this->app->alias(DataSource::class, 'datasource');
    }
}
