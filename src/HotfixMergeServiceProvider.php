<?php

namespace artemka124\HotfixMerge;

use Illuminate\Support\ServiceProvider;

class HotfixMergeServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/hotfixmerge.php' => config_path('hotfixmerge.php'),
        ]);
        $this->loadRoutesFrom(__DIR__.'/routes.php');
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/hotfixmerge.php', 'hotfixmerge');

        $this->app->singleton('hotfixmerge', function ($app) {
            return new HotfixMerge;
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['hotfixmerge'];
    }
}
