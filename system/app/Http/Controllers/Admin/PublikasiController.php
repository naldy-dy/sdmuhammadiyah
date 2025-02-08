<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PublikasiController extends Controller
{
    function indexBerita(){
        $data['title'] = "Halaman Berita";
        return view('admin.publikasi.berita.index',$data);
    }
}
