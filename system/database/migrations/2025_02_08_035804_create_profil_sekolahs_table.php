<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('profil_sekolah', function (Blueprint $table) {
            $table->id();
            $table->text(column: 'tentang')->nullable();
            $table->text(column: 'visi')->nullable();
            $table->text(column: 'misi')->nullable();
            $table->text(column: 'sambutan_kepsek')->nullable();
            $table->text(column: 'foto_kepsek')->nullable();
            $table->text(column: 'gambar_utama')->nullable();
            $table->text(column: 'email')->nullable();
            $table->text(column: 'no_wa')->nullable();
            $table->text(column: 'maps')->nullable();
            $table->text(column: 'logo_sekolah')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profil_sekolah');
    }
};
