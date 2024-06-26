<?php

namespace App\Traits;

use Illuminate\Support\Facades\Storage;

trait StoreFiles
{
  public function storeLocal($file, $path, $name)
  {
    $file = $file->storeAs($path, $name, ["disk" => "public"]);
    return  Storage::disk('local')->url($file);
  }
}
