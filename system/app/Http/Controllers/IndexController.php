<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProfilSekolah;

class IndexController extends Controller
{
    function beranda(){
        return view('landing.beranda');
    }

    function tentang(){
        $data['title'] = "Tentang Sekolah";
        return view('landing.tentang',$data);
    }

    function sambutanKepsek(){
        $data['title'] = "Sambutan Kepala Sekolah";
        return view('landing.sambutan-kepsek',$data);
    }

    function visiMisi(){
        $data['title'] = "Visi & Misi Sekolah";
        return view('landing.visi-misi',$data);
    }
}
