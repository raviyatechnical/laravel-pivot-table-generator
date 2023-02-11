<?php

namespace RaviyaTechnical\PivotTableGenerator;

use Illuminate\Support\ServiceProvider;
use RaviyaTechnical\PivotTableGenerator\Console\MakePivotCommand;

class PivotTableGeneratorServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([MakePivotCommand::class]);
        }
    }
}
