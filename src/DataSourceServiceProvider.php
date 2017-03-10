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
            __DIR__.'/publishes/config.php' => config_path('datasource.php'),
        ], 'config');
        if ($this->app->runningInConsole()) {
            $this->commands([
                Commands\ImportDataCommand::class,
            ]);
        }
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('datasource', function($app)
        {
            return new DataSource();
        });
        $packageConfigFile = __DIR__.'/publishes/config.php';

        $this->mergeConfigFrom(
            $packageConfigFile, 'datasource'
        );
    }
}
