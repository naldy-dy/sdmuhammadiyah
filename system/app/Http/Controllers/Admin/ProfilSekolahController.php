<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProfilSekolah;

class ProfilSekolahController extends Controller
{
    function index(){
        $data['profil'] = ProfilSekolah::first();
        $data['title'] = 'Profil Sekolah';
        return view('admin.profil-sekolah.index',$data);
    }

    function edit(){
        $data['profil'] = ProfilSekolah::first();
        $data['title'] = 'Edit Profil Sekolah';
        return view('admin.profil-sekolah.edit',$data);
    }

    function update(ProfilSekolah $profil){
        $profil->tentang = request('tentang');
        $profil->visi = request('visi');
        $profil->misi = request('misi');
        $profil->sambutan_kepsek = request('sambutan_kepsek');
        $profil->handleUploadKepsek();
        $profil->handleUploadGambarUtama();
        $profil->handleUploadLogo();
        $profil->email = request('email');
        $profil->no_wa = request('no_wa');
        $profil->maps = request('maps');
        $profil->judul = request('judul');
        $profil->deskripsi = request('deskripsi');
        $profil->waktu_pelajaran = request('waktu_pelajaran');
        $profil->alamat_lengkap = request('alamat_lengkap');
        $profil->save();
        return redirect('admin/profil-sekolah')->with('success','Berhasil diupdate');
    }
}
