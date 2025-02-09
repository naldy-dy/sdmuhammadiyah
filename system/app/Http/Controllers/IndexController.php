<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProfilSekolah;
use App\Models\Berita;
use App\Models\Galeri;
use App\Models\Artikel;
use App\Models\Slider;
use Illuminate\Pagination\Paginator;

class IndexController extends Controller
{
    function beranda(){
        $data['list_berita'] = Berita::orderBy('created_at','DESC')->get();
        $data['list_slider'] = Slider::orderBy('created_at','DESC')->get();
        return view('landing.beranda',$data);
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

    function berita(){
        $data['title'] = "Berita Sekolah";
        $data['list_berita'] = Berita::orderBy('created_at','DESC')->paginate(15);
        return view('landing.berita',$data);
    }

    function beritaBaca(Berita $berita){
        $data['detail']= $berita;
        $data['title'] = ucwords($berita->judul);
        return view('landing.berita-baca',$data);

    }

    function artikel(){
        $data['title'] = "Artikel Sekolah";
        $data['list_artikel'] = Artikel::orderBy('created_at','DESC')->paginate(15);
        return view('landing.artikel',$data);
    }

    function artikelBaca(Artikel $artikel){
        $data['detail']= $artikel;
        $data['title'] = ucwords($artikel->judul);
        return view('landing.artikel-baca',$data);

    }

    function galeri(){
        $data['title'] = "Galeri Kegiatan Sekolah";
        $data['list_galeri'] = Galeri::orderBy('created_at','DESC')->paginate(8);
        return view('landing.galeri',$data);
    }

    function kontak(){
        $data['title'] = "Kontak";
        return view('landing.kontak',$data);
    }
}
