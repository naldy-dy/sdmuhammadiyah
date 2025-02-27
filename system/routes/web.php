<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ProfilSekolahController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\PublikasiController;
use App\Http\Controllers\Admin\MediaController;
use App\Http\Controllers\Admin\DataSekolahController;
use App\Http\Controllers\Admin\ProgramController;
use App\Http\Controllers\Admin\PpdbController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\AuthController;
use App\Models\Saranan;

Route::controller(IndexController::class)->group(function () {
    Route::get('/', 'beranda');
    Route::get('berita', 'berita');
    Route::get('berita/{berita:slug}', 'beritaBaca');
    
    Route::get('artikel', 'artikel');
    Route::get('artikel/{artikel:slug}', 'artikelBaca');

    Route::get('developer', 'developer');
    Route::get('tentang', 'tentang');
    Route::get('visi-misi', 'visiMisi');
    Route::get('galeri', 'galeri');
    Route::get('siswa-berprestasi', 'siswaPrestasi');
    Route::get('kontak', 'kontak');
    Route::get('sarana-prasarana', 'sarana');
    Route::get('guru', 'guru');
    Route::get('ppdb', 'ppdb');
    Route::get('ppdb/{id}', 'showPpdb');
    Route::post('ppdb', 'storePpdb');
    Route::get('extrakurikuler', 'extra');
    Route::get('informasi', 'informasi');
    Route::get('kalender-akademik/{tahun}', 'kalender');
    Route::get('sambutan-kepala-sekolah', 'sambutanKepsek');
});

Route::controller(AuthController::class)->group(function () {
        Route::get('login', 'login')->name('login');
        Route::post('login', 'loginProses');
        Route::get('logout', 'logout');
    });


Route::prefix('admin')->middleware('auth')->group(function(){

    Route::controller(ProfilSekolahController::class)->group(function () {
        Route::get('profil-sekolah', 'index');
        Route::get('profil-sekolah/edit', 'edit');
        Route::put('profil-sekolah/{profil}/edit', 'update');
    });

    Route::controller(AdminController::class)->group(function () {
        Route::get('beranda', 'beranda');
        Route::get('profil-akun', 'profilAkun');
        Route::post('profil-akun/ganti-password', 'gantiPassword');
    });

    Route::controller(PpdbController::class)->group(function () {
        Route::get('ppdb/config', 'config');
        Route::post('ppdb/config', 'storeConfig');

        Route::get('ppdb/{tahun}', 'index');
        Route::get('ppdb/{tahun}/{siswa}', 'show');
        Route::get('ppdb/{tahun}/{siswa}/tolak', 'tolak');
        Route::get('ppdb/{tahun}/{siswa}/terima', 'terima');
    });

    Route::controller(DataSekolahController::class)->group(function () {
        Route::get('siswa', 'indexSiswa');
        Route::post('siswa/search', 'cariSiswa');
        Route::get('siswa/{kelas}', 'filterKelas');
        Route::post('siswa/import', 'importSiswa');
        Route::get('siswa/{siswa}/edit', 'editSiswa');
        Route::put('siswa/{siswa}/update', 'updateSiswa');


        Route::get('guru', 'indexGuru');
        Route::post('guru', 'storeGuru');
        Route::get('guru/{guru}/delete', 'destroyGuru');
    });

        Route::controller(PublikasiController::class)->group(function () {
            Route::get('berita', 'indexBerita');
            Route::get('berita/create', 'createBerita');
            Route::post('berita/create', 'storeBerita');
            Route::get('berita/{berita:slug}/delete', 'destroyBerita');
            Route::get('berita/{berita:slug}/edit', 'editBerita');
            Route::get('berita/{berita:slug}/show', 'showBerita');
            Route::put('berita/{berita:slug}/edit', 'updateBerita');


            Route::get('artikel', 'indexArtikel');
            Route::get('artikel/create', 'createArtikel');
            Route::post('artikel/create', 'storeArtikel');
            Route::get('artikel/{artikel:slug}/delete', 'destroyArtikel');
            Route::get('artikel/{artikel:slug}/edit', 'editArtikel');
            Route::get('artikel/{artikel:slug}/show', 'showArtikel');
            Route::put('artikel/{artikel:slug}/edit', 'updateArtikel');

            Route::get('informasi', 'indexInformasi');
            Route::get('informasi/create', 'createInformasi');
            Route::post('informasi/create', 'storeInformasi');
            Route::get('informasi/{informasi:slug}/delete', 'destroyInformasi');
            Route::get('informasi/{informasi:slug}/edit', 'editInformasi');
            Route::get('informasi/{informasi:slug}/show', 'showInformasi');
            Route::put('informasi/{informasi:slug}/edit', 'updateInformasi');
        });

        Route::controller(MediaController::class)->group(function () {
            Route::get('galeri', 'indexGaleri');
            Route::post('galeri', 'storeGaleri');
            Route::get('galeri/{galeri}/delete', 'destroyGaleri');

            Route::get('slider', 'indexSlider');
            Route::post('slider', 'storeSlider');
            Route::get('slider/{slider}/delete', 'destroySlider');

            Route::get('siswa-berprestasi', 'indexPrestasi');
            Route::post('siswa-berprestasi', 'storePrestasi');
            Route::get('siswa-berprestasi/{prestasi}/delete', 'destroyPrestasi');
        });

        Route::controller(ProgramController::class)->group(function () {
            Route::get('sarana-prasarana', 'indexSarana');
            Route::post('sarana-prasarana', 'storeSarana');
            Route::get('sarana-prasarana/{sarana}/delete', 'destroySarana');


            Route::get('kalender-akademik/{tahun}', 'indexKalender');
            Route::post('kalender-akademik/{tahun}', 'storeKalender');
            Route::get('kalender-akademik/{tahun}/{kalender}/delete', 'destroyKalender');

            Route::get('extrakurikuler', 'indexExtra');
            Route::post('extrakurikuler', 'storeExtra');
            Route::get('extrakurikuler/{extra}/delete', 'destroyExtra');
        });
});
