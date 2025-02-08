<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ProfilSekolahController;

Route::get('/', function () {
    return view('landing.index');
});


Route::get('admin', function () {
    return view('admin.template.layout');
});


Route::prefix('admin')->group(function(){
    Route::controller(ProfilSekolahController::class)->group(function () {
        Route::get('profil-sekolah', 'index');
        Route::get('profil-sekolah/edit', 'edit');
        Route::post('profil-sekolah/edit', 'update');
    });
   });
