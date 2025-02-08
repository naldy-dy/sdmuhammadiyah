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
}
