<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Str;
class Artikel extends Model
{
    protected $table = 'artikel';

    function handleUploadCover(){
        if (request()->hasFile('cover')) {
          $file = request()->file('cover');
          $destination = 'public/app/publikasi/';
          $randomStr = Str::random(9);
          $filename = $destination.'-'.$randomStr. "-artikel." . $file->extension();
          $url = $file->move($destination, $filename);
          $this->cover = $filename;
          $this->save;
        }
      }
}
