<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ProfilSekolahController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\PublikasiController;
use App\Http\Controllers\Admin\MediaController;
use App\Http\Controllers\Admin\DataSekolahController;
use App\Http\Controllers\Admin\ProgramController;
use App\Http\Controllers\IndexController;
use App\Models\Saranan;

Route::controller(IndexController::class)->group(function () {
    Route::get('/', 'beranda');
    Route::get('berita', 'berita');
    Route::get('berita/{berita:slug}', 'beritaBaca');
    
    Route::get('artikel', 'artikel');
    Route::get('artikel/{artikel:slug}', 'artikelBaca');

    Route::get('tentang', 'tentang');
    Route::get('visi-misi', 'visiMisi');
    Route::get('galeri', 'galeri');
    Route::get('kontak', 'kontak');
    Route::get('guru', 'guru');
    Route::get('kalender-akademik/{tahun}', 'kalender');
    Route::get('sambutan-kepala-sekolah', 'sambutanKepsek');
});


Route::prefix('admin')->group(function(){

    Route::controller(ProfilSekolahController::class)->group(function () {
        Route::get('profil-sekolah', 'index');
        Route::get('profil-sekolah/edit', 'edit');
        Route::put('profil-sekolah/{profil}/edit', 'update');
    });

    Route::controller(AdminController::class)->group(function () {
        Route::get('beranda', 'beranda');
    });

    Route::controller(DataSekolahController::class)->group(function () {
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
        });
});
