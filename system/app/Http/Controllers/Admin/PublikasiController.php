<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Berita;
use App\Models\Artikel;
use App\Models\Informasi;
use Str;
use Illuminate\Pagination\Paginator;

class PublikasiController extends Controller
{
    function indexBerita(){
        $data['title'] = "Halaman Berita";
        $data['list_berita'] = Berita::orderBy('created_at','DESC')->paginate(12);
        return view('admin.publikasi.berita.index',$data);
    }

    function createBerita(){
        $data['title'] = "Halaman Berita";
        return view('admin.publikasi.berita.create',$data);
    }

    function storeBerita(){
    	$berita = new Berita;
    	$berita->judul = request('judul');
    	$berita->isi = request('isi');
    	$berita->viewer = 0;
    	$str = Str::random(5).'-'.Str::random(5);
     	$berita->slug = date('Y').'-'.Str::slug(request('judul')).'-'.$str;
    	$berita->handleUploadCover();
    	$berita->save();
    	return redirect('admin/berita')->with('success','Berhasil');
    }

    function updateBerita(Berita $berita){
    	$berita->judul = request('judul');
    	$berita->isi = request('isi');
    	$berita->viewer = 0;
    	$str = Str::random(5).'-'.Str::random(5);
     	$berita->slug = date('Y').'-'.Str::slug(request('judul')).'-'.$str;
    	$berita->handleUploadCover();
    	$berita->save();
    	return redirect('admin/berita')->with('success','Berhasil');
    }

    function showBerita(Berita $berita){
        $data['detail'] = $berita;
        return view('admin.publikasi.berita.show',$data);
    }

    function editBerita(Berita $berita){
        $data['detail'] = $berita;
        return view('admin.publikasi.berita.edit',$data);
    }

    function destroyBerita(Berita $berita){
        $berita->delete();
        return back()->with('success','Berhasil');
    }


    function indexArtikel(){
        $data['title'] = "Halaman Artikel";
        $data['list_artikel'] = Artikel::orderBy('created_at','DESC')->paginate(12);
        return view('admin.publikasi.artikel.index',$data);
    }

    function createArtikel(){
        $data['title'] = "Halaman Artikel";
        return view('admin.publikasi.artikel.create',$data);
    }

    function storeArtikel(){
    	$artikel = new Artikel;
    	$artikel->judul = request('judul');
    	$artikel->isi = request('isi');
    	$artikel->viewer = 0;
    	$str = Str::random(5).'-'.Str::random(5);
     	$artikel->slug = date('Y').'-'.Str::slug(request('judul')).'-'.$str;
    	$artikel->handleUploadCover();
    	$artikel->save();
    	return redirect('admin/artikel')->with('success','Berhasil');
    }

    function updateArtikel(Artikel $artikel){
    	$artikel->judul = request('judul');
    	$artikel->isi = request('isi');
    	$artikel->viewer = 0;
    	$str = Str::random(5).'-'.Str::random(5);
     	$artikel->slug = date('Y').'-'.Str::slug(request('judul')).'-'.$str;
    	$artikel->handleUploadCover();
    	$artikel->save();
    	return redirect('admin/artikel')->with('success','Berhasil');
    }

    function showArtikel(Artikel $artikel){
        $data['detail'] = $artikel;
        return view('admin.publikasi.artikel.show',$data);
    }

    function editArtikel(Artikel $artikel){
        $data['detail'] = $artikel;
        return view('admin.publikasi.artikel.edit',$data);
    }

    function destroyArtikel(Artikel $artikel){
        $artikel->delete();
        return back()->with('success','Berhasil');
    }



    function indexInformasi(){
        $data['title'] = "Halaman Informasi";
        $data['list_informasi'] = Informasi::orderBy('created_at','DESC')->paginate(12);
        return view('admin.publikasi.informasi.index',$data);
    }

    function createInformasi(){
        $data['title'] = "Halaman Informasi";
        return view('admin.publikasi.informasi.create',$data);
    }

    function storeInformasi(){
    	$informasi = new Informasi;
    	$informasi->judul = request('judul');
    	$informasi->isi = request('isi');
    	$informasi->viewer = 0;
    	$str = Str::random(5).'-'.Str::random(5);
     	$informasi->slug = date('Y').'-'.Str::slug(request('judul')).'-'.$str;
    	$informasi->handleUploadCover();
    	$informasi->save();
    	return redirect('admin/informasi')->with('success','Berhasil');
    }

    function updateInformasi(Informasi $informasi){
    	$informasi->judul = request('judul');
    	$informasi->isi = request('isi');
    	$informasi->viewer = 0;
    	$str = Str::random(5).'-'.Str::random(5);
     	$informasi->slug = date('Y').'-'.Str::slug(request('judul')).'-'.$str;
    	$informasi->handleUploadCover();
    	$informasi->save();
    	return redirect('admin/informasi')->with('success','Berhasil');
    }
    
    function showInformasi(Informasi $informasi){
        $data['detail'] = $informasi;
        return view('admin.publikasi.informasi.show',$data);
    }

    function editInformasi(Informasi $informasi){
        $data['detail'] = $informasi;
        return view('admin.publikasi.informasi.edit',$data);
    }

    function destroyInformasi(Informasi $informasi){
        $informasi->delete();
        return back()->with('success','Berhasil');
    }
}
