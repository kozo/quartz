<?php

namespace Quartz\Providers;

use Illuminate\Support\ServiceProvider;
use Quartz\Console\Commands\Create;
use Quartz\Console\Commands\Install;
use Quartz\Console\Commands\Show;

class QuartzServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                Show::class,
                Install::class,
                Create::class
            ]);
        }
    }
}
