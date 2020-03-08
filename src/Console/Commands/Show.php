<?php

namespace Quartz\Console\Commands;

use Illuminate\Console\Command;
use Watchmaker\error\ClassNotFoundException;
use Watchmaker\lib\Decorator;
use Watchmaker\Watchmaker;

class Show extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'quartz:show {name=QuartzCron : class name} {path=\App\Quarts : namespace}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     * @throws ClassNotFoundException
     */
    public function handle()
    {
        $path = $this->argument('path');
        $className = $this->argument('name');

        $class = sprintf("%s\\%s", $path, $className);
        if (class_exists($class) === false) {
            throw new ClassNotFoundException();
        }

        $watchmaker = new Watchmaker();
        $quarts = new $class();
        $watchmaker = $quarts->handle($watchmaker);
        $watchmaker->show();
    }
}
