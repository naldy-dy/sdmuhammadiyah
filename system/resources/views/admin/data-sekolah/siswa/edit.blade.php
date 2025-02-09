@extends('admin.template.layout')
@section('content')
<div class="card">
    <div class="card-body">
    <form action="{{url('admin/siswa',$siswa->id)}}/update" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <span>Nama Lengkap Siswa</span>
                <input type="text" name="nama_lengkap" value="{{ $siswa->nama_lengkap }}" required class="form-control">
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <span>Jenis Kelamin</span>
                <select class="form-control" name="jenis_kelamin" required>
                    <option value="Laki-laki" {{ $siswa->jenis_kelamin == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                    <option value="Perempuan" {{ $siswa->jenis_kelamin == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                </select>
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <span>NIK</span>
                <input type="number" name="nik" value="{{ $siswa->nik }}" required class="form-control">
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <span>No KK</span>
                <input type="number" name="no_kk" value="{{ $siswa->no_kk }}" required class="form-control">
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <span>No Registrasi Akta Kelahiran</span>
                <input type="number" name="no_reg_akta" value="{{ $siswa->no_reg_akta }}" required class="form-control">
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <span>NISN</span>
                <input type="number" name="nisn" value="{{ $siswa->nisn }}" required class="form-control">
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <span>Tempat Lahir</span>
                <input type="text" name="tempat_lahir" value="{{ $siswa->tempat_lahir }}" required class="form-control">
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <span>Tanggal Lahir</span>
                <input type="date" name="tanggal_lahir" value="{{ $siswa->tanggal_lahir }}" required class="form-control">
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <span>Agama</span>
                <select class="form-control" name="agama" required>
                    <option value="Islam" {{ $siswa->agama == 'Islam' ? 'selected' : '' }}>Islam</option>
                    <option value="Kristen" {{ $siswa->agama == 'Kristen' ? 'selected' : '' }}>Kristen</option>
                    <option value="Hindu" {{ $siswa->agama == 'Hindu' ? 'selected' : '' }}>Hindu</option>
                    <option value="Budha" {{ $siswa->agama == 'Budha' ? 'selected' : '' }}>Budha</option>
                    <option value="Konghuchu" {{ $siswa->agama == 'Konghuchu' ? 'selected' : '' }}>Konghuchu</option>
                </select>
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <span>Alamat Lengkap</span>
                <input type="text" name="alamat" value="{{ $siswa->alamat }}" required class="form-control">
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <span>No WA Orang Tua/Wali</span>
                <input type="number" name="wa_orangtua" value="{{ $siswa->wa_orangtua }}" required class="form-control">
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <span>Email Orang Tua</span>
                <input type="email" name="email_orangtua" value="{{ $siswa->email_orangtua }}" class="form-control">
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <span>Asal TK</span>
                <input type="text" name="asal_sekolah" value="{{ $siswa->asal_sekolah }}" required class="form-control">
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <span>Foto Latar Merah (3x4)</span>
                <input type="file" accept="image/*" name="foto" class="form-control">
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <span>Scan KK</span>
                <input type="file" accept=".pdf" name="file_kk" class="form-control">
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <span>Scan Akta Kelahiran</span>
                <input type="file" accept=".pdf" name="file_akta" class="form-control">
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <span>Foto KTP Orang Tua</span>
                <input type="file" accept="image/*" name="file_ktp_ortu" class="form-control">
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <span>File Nilai Akhir TK</span>
                <input type="file" accept=".pdf" name="file_nilai" class="form-control">
            </div>
        </div>

        <div class="col-md-12 mt-3 mb-3">
            <button class="btn btn-block btn-success btn-lg">Update Data Siswa</button>
        </div>
    </div>
</form>
    </div>
</div>
@endsection
