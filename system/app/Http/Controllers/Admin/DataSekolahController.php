<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Guru;
use App\Models\Siswa;
use App\Imports\SiswaImport;
use Maatwebsite\Excel\Facades\Excel;

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

    function indexSiswa(){
        $data['title'] = "Data Siswa";
        $data['list_siswa'] = Siswa::where('status_ppdb',1)
        ->orderBy('kelas','ASC')
        ->orderBy('nama_lengkap','ASC')
        ->paginate(25);
        return view('admin.data-sekolah.siswa.index',$data);
    }

    function filterKelas($kelas){
       $data['list_siswa'] = Siswa::where('status_ppdb',1)
       ->where('kelas',$kelas)
        ->orderBy('nama_lengkap','ASC')
       ->paginate(10);
       return view('admin.data-sekolah.siswa.index',$data);

    }

     public function importSiswa(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:xls,xlsx'
        ]);

        Excel::import(new SiswaImport, $request->file('file'));

           $siswa = Siswa::orderBy('created_at', 'desc')
       ->get();

      $seen_nisn = []; 
      foreach ($siswa as $data) {
       if (in_array($data->nisn, $seen_nisn)) {
           $data->delete();
       } else {
               $seen_nisn[] = $data->nisn;
           }
       }

        return redirect()->back()->with('success', 'Data berhasil diimpor!');
    }

    function editSiswa(Siswa $siswa){
        $data['siswa'] = $siswa;
        return view('admin.data-sekolah.siswa.edit',$data);

    }

    function updateSiswa(Siswa $siswa){
        
       $siswa->nama_lengkap = request('nama_lengkap');
       $siswa->jenis_kelamin = request('jenis_kelamin');
       $siswa->nik = request('nik');
       $siswa->no_kk = request('no_kk');
       $siswa->no_reg_akta = request('no_reg_akta');
       $siswa->nisn = request('nisn');
       $siswa->tempat_lahir = request('tempat_lahir');
       $siswa->tanggal_lahir = request('tanggal_lahir');
       $siswa->anak_ke = request('anak_ke');
       $siswa->agama = request('agama');
       $siswa->kewarganegaraan = request('kewarganegaraan');
       $siswa->alamat = request('alamat');
       $siswa->rt = request('rt');
       $siswa->rw = request('rw');
       $siswa->nama_dusun = request('nama_dusun');
       $siswa->nama_kelurahan = request('nama_kelurahan');
       $siswa->kapanewon = request('kapanewon');
       $siswa->kode_pos = request('kode_pos');
       $siswa->tempat_tinggal = request('tempat_tinggal');
       $siswa->berkebutuhan_khusus = request('berkebutuhan_khusus');
       $siswa->transportasi = request('transportasi');
       $siswa->nama_ayah = request('nama_ayah');
       $siswa->nama_ibu = request('nama_ibu');
       $siswa->wa_orangtua = request('wa_orangtua');
       $siswa->email_orangtua = request('email_orangtua');
       $siswa->asal_sekolah = request('asal_sekolah');
       $siswa->tahun_angkatan = date('Y');
        
        if (request()->hasFile('foto')) {
           $siswa->foto = request('foto')->store('ppdb/foto', 'public');
        }
        if (request()->hasFile('file_kk')) {
           $siswa->file_kk = request('file_kk')->store('ppdb/kk', 'public');
        }
        if (request()->hasFile('file_akta')) {
           $siswa->file_akta = request('file_akta')->store('ppdb/akta', 'public');
        }
        if (request()->hasFile('file_ktp_ortu')) {
           $siswa->file_ktp_ortu = request('file_ktp_ortu')->store('ppdb/ktp', 'public');
        }
        if (request()->hasFile('file_nilai')) {
           $siswa->file_nilai = request('file_nilai')->store('ppdb/nilai', 'public');
        }
        
       $siswa->save();
       return back()->with('success','Berhasil');
    }

    function cariSiswa(Request $request){
        $output = "";
        $query = $request->input('search');
        $casn['hasil'] = Siswa::where('nama_lengkap', 'like', "%$query%")
        ->orWhere('nisn', 'like', "%$query%")
        ->orWhere('no_kk', 'like', "%$query%")
        ->orWhere('nik', 'like', "%$query%")
        ->get();
        return response()->json($casn);
    }
}
