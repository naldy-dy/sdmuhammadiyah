<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Str;
use App\Models\Galeri;
use App\Models\GaleriDetail;
use App\Models\PrestasiSiswa;
use App\Models\Slider;
use Illuminate\Pagination\Paginator;

class MediaController extends Controller
{
    function indexGaleri(){
        $data['title'] = "Galeri Kegiatan Sekolah";
        $data['list_galeri'] = Galeri::orderBy('created_at','DESC')->paginate(8);
        return view('admin.media.galeri.index',$data);
    }

    function storeGaleri(Request $request){
        
           $galeri = new Galeri;
           $galeri->judul_kegiatan = request('judul_kegiatan');
           $galeri->save();

            
          $file = $request->file('foto');
          for ($i = 0; $i < count($request->foto); $i++) {
           $destination = 'public/app/img/galeri';
           $randomStr = Str::random(9);
           $filename = $destination.'/'.'-'.$randomStr. "-galeri." . $file[$i]->extension();
           $store =$file[$i]->move($destination, $filename);

          $detail = new GaleriDetail;
          $detail->galeri_id = $galeri->id;
          $detail->foto = $store;
        $detail->save();
       }
       return back()->with('success','Berhasil');
    }

    function destroyGaleri(Galeri $galeri){
        $galeri->delete();
        return back()->with('success','Berhasil dihapus');
    }


    function indexSlider(){
        $data['title'] = "Slider Hero Website";
        $data['list_slider'] = Slider::orderBy('created_at','DESC')->paginate(5);
        return view('admin.media.slider.index',$data);
    }

    function storeSlider(){
        $slider = new Slider;
         $slider->judul = request('judul');
         $slider->deskripsi = request('deskripsi');
         $slider->handleUploadFoto();
         $slider->save();
         return back()->with('success','Berhasil');
    }

    function destroySlider(Slider $slider){
        $slider->delete();
        return back()->with('success','Berhasil');
    }


    function indexPrestasi(){
        $data['title'] = "Slider Hero Website";
        $data['list_prestasi'] = PrestasiSiswa::orderBy('created_at','DESC')->paginate(5);
        return view('admin.media.prestasi.index',$data);
    }

    function storePrestasi(){
        $prestasi = new PrestasiSiswa;
         $prestasi->judul = request('judul');
         $prestasi->nama = request('nama');
         $prestasi->handleUploadFoto();
         $prestasi->save();
         return back()->with('success','Berhasil');
    }

    function destroyPrestasi(PrestasiSiswa $prestasi){
        $prestasi->delete();
        return back()->with('success','Berhasil');
    }

    
}
