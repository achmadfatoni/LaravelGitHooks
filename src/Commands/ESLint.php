<?php

namespace Feek\LaravelGitHooks\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;
use PHPUnit\TextUI\TestRunner;
use Symfony\Component\Console\Input\InputOption;

class ESLint extends SnifferCommand
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'hooks:eslint {--diff}  {--proxiedArguments=}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Runs ESLint';

    /**
     * @return string
     */
    function getCodeSnifferExecutable()
    {
        return  base_path('/node_modules/.bin/eslint');
    }

    /**
     * @return string
     */
    function getErrorMessage()
    {
        return 'eslint failed! Try running `hooks:eslint --fix` to automatically fix';
    }

    /**
     * @return string
     */
    function getSuccessMessage()
    {
        return 'eslint passed!';
    }

    /**
     * @return string
     */
    function getFileExtension()
    {
        return 'js';
    }

    /**
     * @return string
     */
    function getFileLocation()
    {
        return resource_path('assets/js');
    }
}
