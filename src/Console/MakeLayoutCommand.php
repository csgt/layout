<?php

namespace Csgt\Layout\Console;

use Illuminate\Console\Command;
use Illuminate\Console\AppNamespaceDetectorTrait;

class MakeAuthCommand extends Command {
  use AppNamespaceDetectorTrait;

  protected $signature = 'make:csgtlayout';

  protected $description = 'Vistas AdminLTE';

  public function fire() {
    recurse_copy( __DIR__.'public/adminlte', public_path());
  }

  private function recurse_copy($src,$dst) {
    $dir = opendir($src);
    @mkdir($dst);
    while(false !== ( $file = readdir($dir)) ) {
      if (( $file != '.' ) && ( $file != '..' )) {
        if ( is_dir($src . '/' . $file) ) {
          recurse_copy($src . '/' . $file,$dst . '/' . $file);
        }
        else {
          copy($src . '/' . $file,$dst . '/' . $file);
        }
      }
    }
    closedir($dir);
  } 

}