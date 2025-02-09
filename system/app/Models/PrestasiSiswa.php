<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Str;

class PrestasiSiswa extends Model
{
    protected $table = 'prestasi_siswa';
    function handleUploadFoto(){
        if (request()->hasFile('foto')) {
          $file = request()->file('foto');
          $destination = 'public/app/media/prestasi/';
          $randomStr = Str::random(9);
          $filename = $destination.date('Y').'-'.$randomStr. "-prestasi." . $file->extension();
          $url = $file->move($destination, $filename);
          $this->foto = $filename;
          $this->save;
        }
      }
}
