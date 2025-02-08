<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MediaController extends Controller
{
    function indexGaleri(){
        $data['title'] = "Galeri Kegiatan Sekolah";
        return view('admin.media.galeri.index',$data);
    }

    function storeGaleri(){
        $auth = Auth::user();
           $detail = new GaleriDetail;
           $detail->auth_id = $auth->akun_desa_id;
           $detail->provinsi_id = $auth->provinsi_id;
           $detail->kabupaten_id = $auth->kabupaten_id;
           $detail->kecamatan_id = $auth->kecamatan_id;
           $detail->desa_id = $auth->desa_id;
           $detail->galeri_album = request('galeri_album');
           $detail->save();

            
          $iddaerah = $auth->provinsi_id.$auth->kabupaten_id.$auth->kecamatan_id.$auth->desa_id;
          $file = $request->file('galeri_foto');
          for ($i = 0; $i < count($request->galeri_foto); $i++) {
           $destination = 'public/app/img/galeri';
           $randomStr = Str::random(9);
           $filename = $destination.'/'.$iddaerah .'-'.$randomStr. "-galeri." . $file[$i]->extension();
           $store =$file[$i]->move($destination, $filename);

           $galeri = new Galeri;
           $galeri->galeri_detail_id = $detail->id;
           $galeri->galeri_foto = $store;
           $galeri->save();
       }
       return back()->with('success','Berhasil');
    }
}
