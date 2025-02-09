<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ppdb;

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
}
