<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Str;
class Slider extends Model
{
    protected $table = 'slider';

    function handleUploadFoto(){
        if (request()->hasFile('foto')) {
          $file = request()->file('foto');
          $destination = 'public/app/media/';
          $randomStr = Str::random(9);
          $filename = $destination.date('Y').'-'.$randomStr. "-slider." . $file->extension();
          $url = $file->move($destination, $filename);
          $this->foto = $filename;
          $this->save;
        }
      }
}
