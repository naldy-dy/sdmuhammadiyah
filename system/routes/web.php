<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ProfilSekolahController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\PublikasiController;
use App\Http\Controllers\Admin\MediaController;
use App\Http\Controllers\IndexController;


Route::controller(IndexController::class)->group(function () {
    Route::get('/', 'beranda');
    Route::get('berita', 'berita');
    Route::get('berita/{berita:slug}', 'beritaBaca');
    Route::get('tentang', 'tentang');
    Route::get('visi-misi', 'visiMisi');
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
        });
});
