<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ProfilSekolah;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        ProfilSekolah::create([
            'tentang' => 'Tentng sekolah disini',
            'visi' => 'visi sekolah',
            'misi' => 'misi sekolah',
            'sambutan_kepsek' => 'sambutan_kepsek sekolah',
            'foto_kepsek' => 'foto_kepsek sekolah',
            'gambar_utama' => 'gambar_utama sekolah',
            'email' => 'sdmuhammadiyahptk@gmail.com',
            'no_wa' => '081240515616',
            'maps' => 'maps sekolah',
            'logo_sekolah' => 'maps sekolah',
        ]);
    }
}
