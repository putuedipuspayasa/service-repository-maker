<?php

namespace Aksara\ServiceRepositoryMaker\Commands;

use Illuminate\Console\Command;

class ServiceMakerCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:service {name : Name of service}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate Service file';

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
     */
    public function handle()
    {
        $name = $this->argument('name');

        $template = str_replace([
                '{{serviceName}}',
                '{{variableName}}'
            ],
            [
                basename($name),
                lcfirst(str_replace('Service', '', $name)),
                str_replace('Service', '', $name)
            ],
            
            file_get_contents(__DIR__.'/../resources/stubs/Service.stub')
            // file_get_contents(resource_path('stubs/Service.stub'))
        );

        $path   = app_path('/Services');
        if (!file_exists($path)) {
            mkdir($path, $mode = 0755, true);
        }

        file_exists($path . "/" . $name . ".php") ?
            $this->info('Service ' . $name . ' is already exist!') :
            file_put_contents(
                $path . "/" . $name . ".php",
                $template
            );
        $this->info('Service . ' . $this->argument('name') . ' created successfully');
    }
}
