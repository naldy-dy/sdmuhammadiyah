<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Str;
class Informasi extends Model
{
    protected $table = 'informasi';

    function handleUploadCover(){
        if (request()->hasFile('cover')) {
          $file = request()->file('cover');
          $destination = 'public/app/img/informasi/';
          $randomStr = Str::random(9);
          $filename = $destination.date('Y').'-'.$randomStr. "-informasi." . $file->extension();
          $url = $file->move($destination, $filename);
          $this->cover = $filename;
          $this->save;
        }
      }
}
