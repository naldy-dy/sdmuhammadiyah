<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Guru;

class DataSekolahController extends Controller
{
    function indexGuru(){
        $data['title'] = "Data Guru";
        $data['list_guru'] = Guru::all();
        return view('admin.data-sekolah.guru.index',$data);
    }


    function storeGuru(){
       $guru = new Guru;
        $guru->jabatan = request('jabatan');
        $guru->nama = request('nama');
        $guru->handleUploadFoto();
        $guru->save();
         return back()->with('success','Berhasil');
    }

    function destroyGuru(Guru $guru){
        $guru->delete();
        return back()->with('success','Berhasil');
    }
}
