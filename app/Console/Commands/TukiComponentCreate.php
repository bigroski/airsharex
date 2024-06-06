<?php

namespace App\Console\Commands;

use Str;
use Illuminate\Console\Command;
use Illuminate\Support\Pluralizer;
use Illuminate\Filesystem\Filesystem;

class TukiComponentCreate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'makesake:tuki-component {name} {friendly_name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new Tuki Cms Component';

    /**
     * Filesystem instance
     * @var Filesystem
     */
    protected $files;

    /**
     * Create a new command instance.
     * @param Filesystem $files
     */
    public function __construct(Filesystem $files)
    {
        parent::__construct();

        $this->files = $files;
    }


    /**
     * Execute the console command.
     */
    public function handle()
    {
        $path = $this->getSourceFilePath();
        $viewPath = $this->getViewPath($this->getViewName($this->argument('name')));
        $this->makeDirectory(dirname($path));

        $contents = $this->getSourceFile();

        if (!$this->files->exists($path)) {
            $this->files->put($path, $contents);
            // Make view here
            $this->files->put($viewPath, '<div>{{$title}} - {{$description}}</div>');
            $this->info("File : {$path} created");
        } else {
            $this->info("File : {$path} already exits");
        }
        // Make Appropriate View
        // $this->call('make:view', ['name' => $this->getViewName($this->argument('name'))]);
    }
    /**
     * Return the stub file path
     * @return string
     *
     */
    public function getStubPath()
    {
        return __DIR__ . '/../../../stubs/tukicomponent.stub';
    }
    /**
    **
    * Map the stub variables present in stub to its value
    *
    * @return array
    *
    */
    public function getStubVariables()
    {
        return [
            'CLASS_NAME'        => $this->getSingularClassName($this->argument('name')),
            'FRIENDLY_NAME'     => $this->argument('friendly_name'),
            'VIEW_NAME' => $this->getViewName($this->argument('name'))
        ];
    }
    /**
     * Get the stub path and the stub variables
     *
     * @return bool|mixed|string
     *
     */
    public function getSourceFile()
    {
        return $this->getStubContents($this->getStubPath(), $this->getStubVariables());
    }


    /**
     * Replace the stub variables(key) with the desire value
     *
     * @param $stub
     * @param array $stubVariables
     * @return bool|mixed|string
     */
    public function getStubContents($stub , $stubVariables = [])
    {
        $contents = file_get_contents($stub);

        foreach ($stubVariables as $search => $replace)
        {
            $contents = str_replace('$'.$search , $replace, $contents);
        }

        return $contents;

    }
    /**
     * Get the full path of generate class
     *
     * @return string
     */
    public function getSourceFilePath()
    {
        return base_path('App\\View\\Components\\PageBlocks') .'\\' .$this->getSingularClassName($this->argument('name')) . '.php';
    }
    public function getViewPath($name){
        return base_path('/resources/views/components/page-blocks/'.$name.'.blade.php');
    }
    /**
     * Return the Singular Capitalize Name
     * @param $name
     * @return string
     */
    public function getSingularClassName($name)
    {
        return ucwords(Pluralizer::singular($name));
    }

    public function getViewName($name){
        return Str::kebab(Pluralizer::singular($name));;
    }
    /**
     * Build the directory for the class if necessary.
     *
     * @param  string  $path
     * @return string
     */
    protected function makeDirectory($path)
    {
        if (! $this->files->isDirectory($path)) {
            $this->files->makeDirectory($path, 0777, true, true);
        }

        return $path;
    }
}
