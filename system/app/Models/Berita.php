<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Str;
class Berita extends Model
{
    protected $table = 'berita';

    function handleUploadCover(){
        if (request()->hasFile('cover')) {
          $file = request()->file('cover');
          $destination = 'public/app/publikasi/';
          $randomStr = Str::random(9);
          $filename = $destination.'-'.$randomStr. "-berita." . $file->extension();
          $url = $file->move($destination, $filename);
          $this->cover = $filename;
          $this->save;
        }
      }
}
