<?php

namespace Quartz\Providers;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\ServiceProvider;
use Quartz\Console\Commands\Show;
use Search\Console\Commands\FilterGenerator;
use Search\Console\Commands\SearchableGenerator;
use Search\Searchable;

class QuartzServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    /*public function register()
    {
        $this->registerMacro();
        $this->registerCommand();
    }*/

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                Show::class
            ]);
        }
    }

    /*protected function registerMacro()
    {
        Builder::macro('search', function(Searchable $search, $query = null) {
            return $search->process($this, $query);
        });
    }*/

    protected function registerCommand()
    {
        /*$this->app->singleton('quartz:show', function($app) {
            return new SearchableGenerator($app['files']);
        });*/
        /*$this->app->singleton('make.filter', function($app) {
            return new FilterGenerator($app['files']);
        });*/

        /*$this->commands([
            'make.searchable',
            'make.filter',
        ]);*/
    }
}
