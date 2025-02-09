@extends('admin.template.layout')
@section('content')
<div class="card">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-hover table-striped table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Aksi</th>
                        <th>Nama Siswa</th>
                        <th>Jenis Kelamin</th>
                        <th>Tempat Tanggal Lahir</th>
                        <th>Umur</th>
                        <th>NIK</th>
                        <th>Agama</th>
                        <th>Alamat Lengkap</th>
                    </tr>
                </thead>

                @foreach($list_siswa as $item)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>-</td>
                    <td>{{strtoupper($item->nama_lengkap)}}</td>
                    <td>{{ucwords($item->jenis_kelamin)}}</td>
                    <td>{{ucwords($item->tempat_lahir)}}, {{ucwords($item->tanggal_lahir)}}</td>
                    <td>{{ \Carbon\Carbon::parse($item->tanggal_lahir)->age }} tahun</td>
                    <td>{{ucwords($item->nik)}}</td>
                    <td>{{ucwords($item->agama)}}</td>
                    <td>{{ucwords($item->alamat)}}</td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection