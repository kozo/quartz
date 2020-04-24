<?php

namespace Quartz\Console\Commands;

use Illuminate\Console\GeneratorCommand;

class Create extends GeneratorCommand
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'quartz:create {name=QuartzCron : class name} {--f|force}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new quartz class';

    /**
     * The type of class being generated.
     *
     * @var string
     */
    protected $type = 'Quartz';

    /**
     * Get the default namespace for the class.
     *
     * @param  string  $rootNamespace
     * @return string
     */
    protected function getDefaultNamespace($rootNamespace)
    {
        return $rootNamespace . '\Quartz';
    }

    /**
     * Get the stub file for the generator.
     *
     * @return string
     */
    protected function getStub()
    {
        return  __DIR__ . '/Stubs/Quartz.stab';
    }
}
