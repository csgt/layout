<?php

namespace Csgt\Layout\Console;

use Illuminate\Console\Command;

class MakeLayoutCommand extends Command {

  protected $signature = 'make:csgtlayout';

  protected $description = 'Vistas AdminLTE';


  protected $views = [
    'layouts/app.stub' => 'layouts/app.blade.php',
  ];

  protected $langs = [
    'es/menu.stub' => 'es/menu.php',
    'en/menu.stub' => 'en/menu.php',
  ];

  public function fire() {
    $origen = __DIR__ . "/public";
    //dd($origen);
    $this->recurse_copy($origen, public_path());
    $this->exportViews();
    $this->exportLangs();
  }

  private function recurse_copy($src,$dst) {
    $dir = opendir($src);
    @mkdir($dst);
    while(false !== ( $file = readdir($dir)) ) {
      if (( $file != '.' ) && ( $file != '..' )) {
        if ( is_dir($src . '/' . $file) ) {
          $this->recurse_copy($src . '/' . $file,$dst . '/' . $file);
        }
        else {
          copy($src . '/' . $file,$dst . '/' . $file);
        }
      }
    }
    closedir($dir);
  } 

  protected function exportViews() {
    foreach ($this->views as $key => $value) {
      copy(
        __DIR__.'/stubs/make/views/'.$key,
        base_path('resources/views/'.$value)
      );
    }
  }

  protected function exportLangs() {
    foreach ($this->langs as $key => $value) {
      copy(
        __DIR__.'/stubs/make/lang/'.$key,
        base_path('resources/lang/'.$value)
      );
    }
  }


}