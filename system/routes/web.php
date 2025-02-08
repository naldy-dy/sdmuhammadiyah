<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ProfilSekolahController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\PublikasiController;
use App\Http\Controllers\IndexController;


Route::controller(IndexController::class)->group(function () {
    Route::get('/', 'beranda');
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
            Route::put('berita/{berita:slug}/edit', 'updateBerita');
        });
});
