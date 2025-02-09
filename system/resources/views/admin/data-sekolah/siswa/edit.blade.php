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
                <input type="text" name="nama_lengkap" required class="form-control" value="{{ $siswa->nama_lengkap ?? '' }}">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <span>Jenis Kelamin</span>
                <select class="form-control" name="jenis_kelamin" required>
                    <option value="" hidden>Pilih...</option>
                    <option value="Laki-laki" {{ $siswa->jenis_kelamin == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                    <option value="Perempuan" {{ $siswa->jenis_kelamin == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                </select>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <span>NIK</span>
                <input type="number" name="nik" required class="form-control" value="{{ $siswa->nik ?? '' }}">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <span>No KK</span>
                <input type="number" name="no_kk" required class="form-control" value="{{ $siswa->no_kk ?? '' }}">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <span>No Registrasi Akta Kelahiran</span>
                <input type="number" name="no_reg_akta" required class="form-control" value="{{ $siswa->no_reg_akta ?? '' }}">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <span>NISN</span>
                <input type="number" name="nisn" required class="form-control" value="{{ $siswa->nisn ?? '' }}">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <span>Tempat Lahir</span>
                <input type="text" name="tempat_lahir" required class="form-control" value="{{ $siswa->tempat_lahir ?? '' }}">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <span>Tanggal Lahir</span>
                <input type="date" name="tanggal_lahir" required class="form-control" value="{{ $siswa->tanggal_lahir ?? '' }}">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <span>Agama</span>
                <select class="form-control" name="agama" required>
                    <option value="" hidden>Pilih...</option>
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
                <input type="text" name="alamat" required class="form-control" value="{{ $siswa->alamat ?? '' }}">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <span>Kode POS</span>
                <input type="number" name="kode_pos" required class="form-control" value="{{ $siswa->kode_pos ?? '' }}">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <span>Nama Ayah/Wali</span>
                <input type="text" name="nama_ayah" required class="form-control" value="{{ $siswa->nama_ayah ?? '' }}">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <span>Nama Ibu/Wali</span>
                <input type="text" name="nama_ibu" required class="form-control" value="{{ $siswa->nama_ibu ?? '' }}">
            </div>
        </div>
        <div class="col-md-12 mt-3 mb-3">
            <button class="btn btn-block btn-info btn-lg">Daftarkan Calon Siswa</button>
        </div>
    </div>
</form>

    </div>
</div>
@endsection
