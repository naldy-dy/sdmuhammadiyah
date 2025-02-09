@extends('landing.layout')
@section('content')
<div class="card p-4">
    <div class="card-body">
        <h2 class="text-center">Detail Pendaftaran Siswa</h2>
        <h4>Data Siswa</h4>
        <table class="table table-bordered">
            <tr>
                <th>Nama Lengkap</th>
                <td>{{ $siswa->nama_lengkap }}</td>
            </tr>
            <tr>
                <th>Jenis Kelamin</th>
                <td>{{ $siswa->jenis_kelamin }}</td>
            </tr>
            <tr>
                <th>NIK</th>
                <td>{{ $siswa->nik }}</td>
            </tr>
            <tr>
                <th>No KK</th>
                <td>{{ $siswa->no_kk }}</td>
            </tr>
            <tr>
                <th>No Registrasi Akta</th>
                <td>{{ $siswa->no_reg_akta }}</td>
            </tr>
            <tr>
                <th>NISN</th>
                <td>{{ $siswa->nisn }}</td>
            </tr>
            <tr>
                <th>Tempat, Tanggal Lahir</th>
                <td>{{ $siswa->tempat_lahir }}, {{ \Carbon\Carbon::parse($siswa->tanggal_lahir)->format('d-m-Y') }}</td>
            </tr>

            <tr>
                <th>Umur</th>
                <td>{{ \Carbon\Carbon::parse($siswa->tanggal_lahir)->age }} tahun</td>
            </tr>

            <tr>
                <th>Anak Ke</th>
                <td>{{ $siswa->anak_ke }}</td>
            </tr>
            <tr>
                <th>Agama</th>
                <td>{{ $siswa->agama }}</td>
            </tr>
        </table>

        <h4 class="mt-4">Alamat</h4>
        <table class="table table-bordered">
            <tr>
                <th>Alamat</th>
                <td>{{ $siswa->alamat }}</td>
            </tr>
            <tr>
                <th>RT / RW</th>
                <td>{{ $siswa->rt }} / {{ $siswa->rw }}</td>
            </tr>
            <tr>
                <th>Kelurahan / Dusun</th>
                <td>{{ $siswa->nama_kelurahan }} / {{ $siswa->nama_dusun }}</td>
            </tr>
            <tr>
                <th>Kapanewon</th>
                <td>{{ $siswa->kapanewon }}</td>
            </tr>
            <tr>
                <th>Kode POS</th>
                <td>{{ $siswa->kode_pos }}</td>
            </tr>
            <tr>
                <th>Tempat Tinggal</th>
                <td>{{ $siswa->tempat_tinggal }}</td>
            </tr>
        </table>

        <h4 class="mt-4">Orang Tua/Wali</h4>
        <table class="table table-bordered">
            <tr>
                <th>Nama Ayah</th>
                <td>{{ $siswa->nama_ayah }}</td>
            </tr>
            <tr>
                <th>Nama Ibu</th>
                <td>{{ $siswa->nama_ibu }}</td>
            </tr>
            <tr>
                <th>No WA Orang Tua</th>
                <td>{{ $siswa->wa_orangtua }}</td>
            </tr>
            <tr>
                <th>Email Orang Tua</th>
                <td>{{ $siswa->email_orangtua }}</td>
            </tr>
        </table>

        <h4 class="mt-4">Dokumen</h4>
        <table class="table table-bordered">
            <tr>
                <th>Foto</th>
                <td><img src="{{ asset('system/storage/app/public/' . $siswa->foto) }}" width="100"></td>
            </tr>
            <tr>
                <th>Scan KK</th>
                <td><a href="{{ asset('system/storage/app/public/' . $siswa->file_kk) }}" target="_blank">Lihat</a></td>
            </tr>
            <tr>
                <th>Scan Akta</th>
                <td><a href="{{ asset('system/storage/app/public/' . $siswa->file_akta) }}" target="_blank">Lihat</a></td>
            </tr>
            <tr>
                <th>Foto KTP Orang Tua</th>
                <td><a href="{{ asset('system/storage/app/public/' . $siswa->file_ktp_ortu) }}" target="_blank">Lihat</a></td>
            </tr>
            <tr>
                <th>Nilai Akhir TK</th>
                <td><a href="{{ asset('system/storage/app/public/' . $siswa->file_nilai) }}" target="_blank">Lihat</a></td>
            </tr>
        </table>
    </div>
    </div>

@endsection