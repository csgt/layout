<?php
namespace Csgt\Layout;

use Illuminate\Support\ServiceProvider;

class LayoutServiceProvider extends ServiceProvider
{

    public function boot()
    {
    }

    public function register()
    {
        $this->commands([
            Console\MakeLayoutCommand::class,
        ]);
    }
}
