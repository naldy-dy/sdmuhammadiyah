<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Str;
class Extrakurikuler extends Model
{
    protected $table = 'extrakurikuler';
     function handleUploadFoto(){
        if (request()->hasFile('foto')) {
          $file = request()->file('foto');
          $destination = 'public/app/img/extra/';
          $randomStr = Str::random(9);
          $filename = $destination.date('Y').'-'.$randomStr. "-extra." . $file->extension();
          $url = $file->move($destination, $filename);
          $this->foto = $filename;
          $this->save;
        }
      }
}
