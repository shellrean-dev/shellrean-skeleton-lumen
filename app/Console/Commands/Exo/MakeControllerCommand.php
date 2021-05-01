<?php

namespace App\Console\Commands\Exo;

use Illuminate\Console\GeneratorCommand;

class MakeControllerCommand extends GeneratorCommand
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $name = 'exo:make:controller';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create exo controller';

    /**
     * The type of class being generated
     * 
     * @var string
     */
    protected $type = 'controller';

    /**
     * Get the stub file for the generator.
     * 
     * @return string
     */
    protected function getStub()
    {
        return resource_path('stubs/ControllerStub.stub');
    }

    /**
     * Get the default namespace for the class.
     * 
     * @param string $rootNamespace
     * @return string
     */
    protected function getDefaultNamespace($rootNamespace)
    {
        return $rootNamespace.'\Http\Controllers';
    }

    /**
     * Get the root namespace for the class.
     *
     * @return string
     */
    protected function rootNamespace()
    {
        return 'ShellreanDev';
    }
}
