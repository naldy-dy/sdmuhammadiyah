<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Str;
class ProfilSekolah extends Model
{
    protected $table = 'profil_sekolah';

    function handleUploadKepsek(){
        if (request()->hasFile('foto_kepsek')) {
          $file = request()->file('foto_kepsek');
          $destination = 'public/app/img/';
          $randomStr = Str::random(9);
          $filename = $destination.'-'.$randomStr. "-kepsek." . $file->extension();
          $url = $file->move($destination, $filename);
          $this->foto_kepsek = $filename;
          $this->save;
        }
      }

      function handleUploadGambarUtama(){
        if (request()->hasFile('gambar_utama')) {
          $file = request()->file('gambar_utama');
          $destination = 'public/app/img/';
          $randomStr = Str::random(9);
          $filename = $destination.'-'.$randomStr. "-gambar_utama." . $file->extension();
          $url = $file->move($destination, $filename);
          $this->gambar_utama = $filename;
          $this->save;
        }
      }

      function handleUploadLogo(){
        if (request()->hasFile('logo_sekolah')) {
          $file = request()->file('logo_sekolah');
          $destination = 'public/app/img/';
          $randomStr = Str::random(9);
          $filename = $destination.'-'.$randomStr. "-logo." . $file->extension();
          $url = $file->move($destination, $filename);
          $this->logo_sekolah = $filename;
          $this->save;
        }
      }
}
