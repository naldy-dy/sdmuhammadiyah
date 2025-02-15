<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = 'siswa';
    protected $fillable = [
        'nama_lengkap',
        'jenis_kelamin',
        'nisn',
        'nik',
        'no_kk',
        'tempat_lahir',
        'tanggal_lahir',
        'no_reg_akta',
        'agama',
        'kewarganegaraan',
        'alamat',
        'rt',
        'rw',
        'nama_dusun',
        'nama_kelurahan',
        'kapanewon',
        'kode_pos',
        'tempat_tinggal',
        'berkebutuhan_khusus',
        'transportasi',
        'anak_ke',
        'status_ppdb',
        'kelas',
        'asal_sekolah',
        'file_kk',
        'file_akta',
        'file_ktp_ortu',
        'file_nilai',
        'email_orangtua',
        'nama_ibu',
        'nama_ayah',
        'wa_orangtua',
        'foto',
        'tahun_angkatan',
    ];
}
