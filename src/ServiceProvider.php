<?php

namespace Aksara\ServiceRepositoryMaker;

use Aksara\ServiceRepositoryMaker\Commands\RepositoryMakerCommand;
use Aksara\ServiceRepositoryMaker\Commands\ServiceMakerCommand;
use Illuminate\Support\ServiceProvider as BaseServiceProvider;

class ServiceProvider extends BaseServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {

        $this->commands([
            ServiceMakerCommand::class,
            RepositoryMakerCommand::class,
        ]);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(realpath(__DIR__.'/../resources/stubs'), 'aksara');
        $this->publishes([
            __DIR__.'/../resources/stubs' => resource_path('stubs'),
        ]);
    }
}
