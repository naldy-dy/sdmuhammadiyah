<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProfilSekolah;
use App\Models\Berita;
use App\Models\Galeri;
use App\Models\Artikel;
use App\Models\Slider;
use App\Models\Siswa;
use App\Models\Guru;
use App\Models\Sarana;
use App\Models\Informasi;
use App\Models\PrestasiSiswa;
use App\Models\KalenderAkademik;
use App\Models\Extrakurikuler;
use App\Models\Ppdb;
use Illuminate\Pagination\Paginator;

class IndexController extends Controller
{
    function beranda(){
        $data['ppdb'] = Ppdb::latest()->first();
        $data['list_berita'] = Berita::orderBy('created_at','DESC')->get();
        $data['list_slider'] = Slider::orderBy('created_at','DESC')->get();
        $data['list_prestasi'] = PrestasiSiswa::orderBy('created_at','DESC')->get();
        $data['list_extra'] = Extrakurikuler::all();
        return view('landing.beranda',$data);
    }

    function tentang(){
        $data['title'] = "Tentang Sekolah";
        return view('landing.tentang',$data);
    }

    function sambutanKepsek(){
        $data['title'] = "Sambutan Kepala Sekolah";
        return view('landing.sambutan-kepsek',$data);
    }

    function visiMisi(){
        $data['title'] = "Visi & Misi Sekolah";
        return view('landing.visi-misi',$data);
    }

    function berita(){
        $data['title'] = "Berita Sekolah";
        $data['list_berita'] = Berita::orderBy('created_at','DESC')->paginate(15);
        return view('landing.berita',$data);
    }

    function beritaBaca(Berita $berita){
        $data['detail']= $berita;
        $data['title'] = ucwords($berita->judul);
        return view('landing.berita-baca',$data);

    }

    function artikel(){
        $data['title'] = "Artikel Sekolah";
        $data['list_artikel'] = Artikel::orderBy('created_at','DESC')->paginate(15);
        return view('landing.artikel',$data);
    }

    function artikelBaca(Artikel $artikel){
        $data['detail']= $artikel;
        $data['title'] = ucwords($artikel->judul);
        return view('landing.artikel-baca',$data);

    }

    function galeri(){
        $data['title'] = "Galeri Kegiatan Sekolah";
        $data['list_galeri'] = Galeri::orderBy('created_at','DESC')->paginate(8);
        return view('landing.galeri',$data);
    }

    function kontak(){
        $data['title'] = "Kontak";
        return view('landing.kontak',$data);
    }

    function informasi(){
        $data['title'] = "Data Informasi Sekolah";
         $data['list_informasi'] = Informasi::orderBy('created_at','DESC')->paginate(8);
        return view('landing.informasi',$data);
    }

    function kalender($tahun){
        $data['title'] = "Kalender Akademik Sekolah";
        for ($bulan = 1; $bulan <= 12; $bulan++) {
            $namaBulan = strtolower(date('F', mktime(0, 0, 0, $bulan, 1)));
            $data['list_' . $namaBulan] = KalenderAkademik::whereYear('tanggal', $tahun)
                ->whereMonth('tanggal', $bulan)
                ->get();
        }
        return view('landing.kalender-akademik',$data);
    }

    function guru(){
        $data['title'] = "Data Guru Sekolah";
        $data['list_guru'] = Guru::all();
        return view('landing.guru',$data);
    }

    function siswaPrestasi(){
        $data['title'] = "Siswa Berprestasi";
        $data['list_prestasi'] = PrestasiSiswa::orderBy('created_at','DESC')->paginate(12);
        return view('landing.siswa-prestasi',$data);

    }

    function sarana(){
        $data['title'] = "Sarana & Prasarana Sekolah Kami";
        $data['list_sarana'] = Sarana::orderBy('created_at','DESC')->paginate(8);
        return view('landing.sarana',$data);
    }
    function extra(){
        $data['title'] = "Extrakurikuler Sekolah";
        $data['list_extra'] = Extrakurikuler::orderBy('created_at','DESC')->paginate(8);
        return view('landing.extrakurikuler',$data);
    }

    function ppdb(){
        $data['title'] = "PPDB (Penerimaan Peserta Didik Baru)";
        $data['ppdb'] = Ppdb::latest()->first();
        
        return view('landing.ppdb',$data);
    }

    function storePpdb(Request $request){
         // Validasi input
        $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'jenis_kelamin' => 'required',
            'nik' => 'required|numeric',
            'no_kk' => 'required|numeric',
            'no_reg_akta' => 'required|numeric',
            'nisn' => 'required|numeric',
            'tempat_lahir' => 'required|string',
            'tanggal_lahir' => 'required|date',
            'anak_ke' => 'required|numeric|min:1',
            'agama' => 'required',
            'kewarganegaraan' => 'required',
            'alamat' => 'required|string',
            'rt' => 'required|numeric',
            'rw' => 'required|numeric',
            'nama_dusun' => 'required|string',
            'nama_kelurahan' => 'required|string',
            'kapanewon' => 'nullable|string',
            'kode_pos' => 'required|numeric',
            'tempat_tinggal' => 'required',
            'berkebutuhan_khusus' => 'required',
            'transportasi' => 'required',
            'nama_ayah' => 'required|string',
            'nama_ibu' => 'required|string',
            'wa_orangtua' => 'required|numeric',
            'email_orangtua' => 'nullable|email',
            'asal_sekolah' => 'required|string',
            'foto' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'file_kk' => 'required|mimes:pdf|max:2048',
            'file_akta' => 'required|mimes:pdf|max:2048',
            'file_ktp_ortu' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'file_nilai' => 'required|mimes:pdf|max:2048',
        ]);

        $ppdb = new Siswa;
        $ppdb->nama_lengkap = request('nama_lengkap');
        $ppdb->jenis_kelamin = request('jenis_kelamin');
        $ppdb->nik = request('nik');
        $ppdb->no_kk = request('no_kk');
        $ppdb->no_reg_akta = request('no_reg_akta');
        $ppdb->nisn = request('nisn');
        $ppdb->tempat_lahir = request('tempat_lahir');
        $ppdb->tanggal_lahir = request('tanggal_lahir');
        $ppdb->anak_ke = request('anak_ke');
        $ppdb->agama = request('agama');
        $ppdb->kewarganegaraan = request('kewarganegaraan');
        $ppdb->alamat = request('alamat');
        $ppdb->rt = request('rt');
        $ppdb->rw = request('rw');
        $ppdb->nama_dusun = request('nama_dusun');
        $ppdb->nama_kelurahan = request('nama_kelurahan');
        $ppdb->kapanewon = request('kapanewon');
        $ppdb->kode_pos = request('kode_pos');
        $ppdb->tempat_tinggal = request('tempat_tinggal');
        $ppdb->berkebutuhan_khusus = request('berkebutuhan_khusus');
        $ppdb->transportasi = request('transportasi');
        $ppdb->nama_ayah = request('nama_ayah');
        $ppdb->nama_ibu = request('nama_ibu');
        $ppdb->wa_orangtua = request('wa_orangtua');
        $ppdb->email_orangtua = request('email_orangtua');
        $ppdb->asal_sekolah = request('asal_sekolah');
        $ppdb->status_ppdb = 0;
        $ppdb->kelas = 1;
        $ppdb->tahun_angkatan = date('Y');
        $idppdb = Ppdb::latest()->first();
        $ppdb->ppdb_id = $idppdb->id;
        
        if (request()->hasFile('foto')) {
            $ppdb->foto = request('foto')->store('ppdb/foto', 'public');
        }
        if (request()->hasFile('file_kk')) {
            $ppdb->file_kk = request('file_kk')->store('ppdb/kk', 'public');
        }
        if (request()->hasFile('file_akta')) {
            $ppdb->file_akta = request('file_akta')->store('ppdb/akta', 'public');
        }
        if (request()->hasFile('file_ktp_ortu')) {
            $ppdb->file_ktp_ortu = request('file_ktp_ortu')->store('ppdb/ktp', 'public');
        }
        if (request()->hasFile('file_nilai')) {
            $ppdb->file_nilai = request('file_nilai')->store('ppdb/nilai', 'public');
        }
        
        $ppdb->save();
        $encrypt = encrypt($ppdb->id);
        $url = 'ppdb/'.$encrypt;
        return redirect($url)->with('success','Berhasil terdaftar');
    }

    function showPpdb($id){
        $data['title'] = "Detail Pendaftaran Anda";
        $id = decrypt($id);
        $data['siswa'] = Siswa::findOrFail($id);
        return view('landing.ppdb-hasil',$data);
    }

    function developer(){
        $data['title'] = "Developer Aplikasi";
        return view('landing.developer',$data);
    }
}
