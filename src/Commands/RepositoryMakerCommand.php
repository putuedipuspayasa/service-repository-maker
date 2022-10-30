<?php

namespace Aksara\ServiceRepositoryMaker\Commands;

use Illuminate\Console\Command;

class RepositoryMakerCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:repository {name : Name of repository}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate Repository file';

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
                '{{repositoryName}}',
                '{{variableName}}'
            ],
            [
                basename($name),
                lcfirst(str_replace('Repository', '', $name)),
                str_replace('Repository', '', $name)
            ],
            file_get_contents(__DIR__.'/../resources/stubs/Repository.stub')
        );

        $path   = app_path('/Repositories');
        if (!file_exists($path)) {
            mkdir($path, $mode = 0755, true);
        }

        file_exists($path . "/" . $name . ".php") ?
            $this->info('Repository ' . $name . ' is already exist!') :
            file_put_contents(
                $path . "/" . $name . ".php",
                $template
            );
        $this->info('Repository . ' . $this->argument('name') . ' created successfully');
    }
}
