<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ppdb;
use App\Models\Siswa;

class PpdbController extends Controller
{
    function config(){
    	$data['title'] = "Configg PPDB";
    	$data['list_ppdb'] = Ppdb::orderBy('created_at','DESC')->paginate(10);
    	return view('admin.ppdb.config',$data);
    }

    function storeConfig(){
    	$ppdb = new Ppdb;
    	$ppdb->ppdb_tahun = date('Y');
    	$ppdb->tanggal_mulai = request('tanggal_mulai');
    	$ppdb->tanggal_selesai = request('tanggal_selesai');
    	$ppdb->ppdb_status = 1;
    	$ppdb->save();
    	return back()->with('success','Berhasil');
    }

	function index($tahun){
		$data['list_siswa'] = Siswa::where('status_ppdb',0)
		->where('tahun_angkatan',$tahun)->get();
		return view('admin.ppdb.index',$data);
	}

	function show($tahun, Siswa $siswa){
		$data['siswa'] = $siswa;
		return view('admin.ppdb.show',$data);
	}

	function tolak($tahun, Siswa $siswa){
		$siswa->delete();
		return back()->with('success','Berhasil');
	}

	function terima($tahun, Siswa $siswa){
		$siswa->status_ppdb = 1;
		$siswa->save();
		return back()->with('success','Berhasil');
	}
}
