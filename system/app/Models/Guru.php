<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Str;
class Guru extends Model
{
    protected $table ='guru';
    function handleUploadFoto(){
        if (request()->hasFile('foto')) {
          $file = request()->file('foto');
          $destination = 'public/app/img/guru/';
          $randomStr = Str::random(9);
          $filename = $destination.date('Y').'-'.$randomStr. "-guru." . $file->extension();
          $url = $file->move($destination, $filename);
          $this->foto = $filename;
          $this->save;
        }
      }
}
