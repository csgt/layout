<?php

namespace Csgt\Layout;

use Illuminate\Support\ServiceProvider;
use Illuminate\Foundation\AliasLoader;

class LayoutServiceProvider extends ServiceProvider {

  public function boot() {
    $this->mergeConfigFrom(__DIR__ . '/config/csgtlayout.php', 'csgtlayout');
    $this->publishes([
      __DIR__.'/config/csgtlayout.php' => config_path('csgtlayout.php'),
    ], 'config');
  }

  public function register() {
    $this->commands([
      Console\MakeLayoutCommand::class
    ]);
  }
}