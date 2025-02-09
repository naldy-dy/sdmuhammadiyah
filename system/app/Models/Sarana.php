<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Str;
class Sarana extends Model
{
    protected $table ="sarana";

    function handleUploadFoto(){
        if (request()->hasFile('foto')) {
          $file = request()->file('foto');
          $destination = 'public/app/img/sarana/';
          $randomStr = Str::random(9);
          $filename = $destination.date('Y').'-'.$randomStr. "-sarana." . $file->extension();
          $url = $file->move($destination, $filename);
          $this->foto = $filename;
          $this->save;
        }
      }
}
