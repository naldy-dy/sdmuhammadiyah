<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Sarana;
use App\Models\KalenderAkademik;
use App\Models\Extrakurikuler;
use Illuminate\Pagination\Paginator;


class ProgramController extends Controller
{
    function indexSarana(){
        $data['title'] = "Sarana & Prasarana Sekolah";
        $data['list_sarana'] = Sarana::orderBy('created_at','DESC')->paginate(10);
        return view('admin.program.sarana.index',$data);
    }

    function storeSarana(){
        $sarana = new Sarana;
         $sarana->sarana = request('sarana');
         $sarana->deskripsi = request('deskripsi');
         $sarana->handleUploadFoto();
         $sarana->save();
          return back()->with('success','Berhasil');
     }
 
     function destroySarana(Sarana $sarana){ 
         $sarana->delete();
         return back()->with('success','Berhasil');
     }



     function indexKalender($tahun){
        $data['title'] = "Kalender Akademik Sekolah";
        for ($bulan = 1; $bulan <= 12; $bulan++) {
            $namaBulan = strtolower(date('F', mktime(0, 0, 0, $bulan, 1)));
            $data['list_' . $namaBulan] = KalenderAkademik::whereYear('tanggal', $tahun)
                ->whereMonth('tanggal', $bulan)
                ->get();
        }
        return view('admin.program.kalender.index',$data);
     }

     function storeKalender(){
        $kalender = new KalenderAkademik;
        $kalender->tanggal = request('tanggal');
        $kalender->nama_agenda = request('nama_agenda');
        $kalender->save();
        return back()->with('success','Berhasil');
     }

     function destroyKalender($tahun, KalenderAkademik $kalender){
        $kalender->delete();
        return back()->with('success','Berhasil');
     }



     function indexExtra(){
        $data['title'] = "Sarana & Prasarana Sekolah";
        $data['list_extra'] = Extrakurikuler::orderBy('created_at','DESC')->paginate(10);
        return view('admin.program.extrakurikuler.index',$data);
    }

    function storeExtra(){
        $sarana = new Extrakurikuler;
         $sarana->nama = request('nama');
         $sarana->deskripsi = request('deskripsi');
         $sarana->handleUploadFoto();
         $sarana->save();
          return back()->with('success','Berhasil');
     }
 
     function destroyExtra(Extrakurikuler $extra){ 
         $extra->delete();
         return back()->with('success','Berhasil');
     }
}
