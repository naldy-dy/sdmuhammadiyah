<?php

namespace App\Imports;

use App\Models\Siswa;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Carbon\Carbon;

class SiswaImport implements ToModel, WithHeadingRow
{
public function model(array $row)
{
    return new Siswa([
        'status_ppdb' => 1,
        'nama_lengkap' => $row['nama_lengkap'],
        'jenis_kelamin' => $row['jenis_kelamin'],
        'nisn' => $row['nisn'],
        'nik' => $row['nik'],
        'no_kk' => $row['no_kk'],
        'tempat_lahir' => $row['tempat_lahir'],
        'tanggal_lahir' => $this->transformDate($row['tanggal_lahir']),
        'no_reg_akta' => $row['no_reg_akta'],
        'agama' => $row['agama'],
        'kewarganegaraan' => $row['kewarganegaraan'],
        'alamat' => $row['alamat'],
        'rt' => $row['rt'],
        'rw' => $row['rw'],
        'nama_dusun' => $row['nama_dusun'],
        'nama_kelurahan' => $row['nama_kelurahan'],
        'kapanewon' => $row['kapanewon'],
        'kode_pos' => $row['kode_pos'],
        'tempat_tinggal' => $row['tempat_tinggal'],
        'berkebutuhan_khusus' => $row['berkebutuhan_khusus'],
        'transportasi' => $row['transportasi'],
        'anak_ke' => $row['anak_ke'],
        'kelas' => $row['kelas'],
        'asal_sekolah' => $row['asal_sekolah'],
        'email_orangtua' => $row['email_orangtua'],
        'nama_ibu' => $row['nama_ibu'],
        'nama_ayah' => $row['nama_ayah'],
        'wa_orangtua' => $row['wa_orangtua'],
        'tahun_angkatan' => $row['tahun_angkatan'],
    ]);
}

    private function transformDate($date){
        // Jika nilainya kosong, kembalikan null
        if (!$date) {
            return null;
        }

        // Jika formatnya adalah angka (serial Excel)
        if (is_numeric($date)) {
            return Carbon::createFromDate(1900, 1, 1)->addDays($date - 2)->format('Y-m-d');
        }

        // Jika format sudah dalam bentuk string tanggal
        try {
            return Carbon::parse($date)->format('Y-m-d');
        } catch (\Exception $e) {
            return null;
        }
    }
}
