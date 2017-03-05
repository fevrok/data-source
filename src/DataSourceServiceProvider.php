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
        // include __DIR__.'/DataSource.php';
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $packageConfigFile = __DIR__.'/publishes/config/config.php';

        $this->mergeConfigFrom(
            $packageConfigFile, 'datasource'
        );

        /*$this->app->singleton(DataSource::class, function () {
            return new DataSource();
        });*/
        // $this->app->make('LaravelArab\DataSource\DataSource.php');

        $this->app->alias(DataSource::class, 'datasource');
    }
}
