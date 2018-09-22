<?php
namespace Csgt\Layout\Console;

use Illuminate\Console\Command;

class MakeLayoutCommand extends Command
{

    protected $signature = 'make:csgtlayout';

    protected $description = 'Vistas AdminLTE';

    protected $views = [
        'layouts/app.stub' => 'layouts/app.blade.php',
    ];

    protected $langs = [
        'es/menu.stub' => 'es/menu.php',
        'en/menu.stub' => 'en/menu.php',
    ];

    public function handle()
    {
        $this->exportViews();
        $this->exportLangs();
    }

    protected function exportViews()
    {
        foreach ($this->views as $key => $value) {
            copy(
                __DIR__ . '/stubs/make/views/' . $key,
                base_path('resources/views/' . $value)
            );
        }
    }

    protected function exportLangs()
    {
        foreach ($this->langs as $key => $value) {
            copy(
                __DIR__ . '/stubs/make/lang/' . $key,
                base_path('resources/lang/' . $value)
            );
        }
    }

    protected function getAppNamespace()
    {
        return 'App\\';
    }
}
