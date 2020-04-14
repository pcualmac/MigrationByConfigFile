<?php

namespace pcualmac\MigrationByConfigFile;


use Illuminate\Support\ServiceProvider;

class MigrationByConfigFileServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->mergeConfigFrom(
            __DIR__ . '/config/MigrationByConfigFile.php',
            'MigrationByConfigFile'
        );
        $this->publishes([
            __DIR__ . '/config/MigrationByConfigFile.php' => config_path('MigrationByConfigFile.php'),
        ]);
        $this->loadMigrationsFrom(config('MigrationByConfigFile.path'));
    }
}
