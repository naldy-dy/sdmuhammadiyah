@extends('admin.template.layout')
@section('content')
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<div class="card">
    <div class="card-body">

        <div class="btn-group">
            <div class="dropdown">
              <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Filter Kelas
            </button> &nbsp;&nbsp;&nbsp;
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="{{url('admin/siswa')}}">Semua Kelas</a>
                <a class="dropdown-item" href="{{url('admin/siswa/1')}}">Kelas 1</a>
                <a class="dropdown-item" href="{{url('admin/siswa/2')}}">Kelas 2</a>
                <a class="dropdown-item" href="{{url('admin/siswa/3')}}">Kelas 3</a>
                <a class="dropdown-item" href="{{url('admin/siswa/4')}}">Kelas 4</a>
                <a class="dropdown-item" href="{{url('admin/siswa/5')}}">Kelas 5</a>
                <a class="dropdown-item" href="{{url('admin/siswa/6')}}">Kelas 6</a>
            </div>
        </div>

        <button type="button" class="btn btn-primary mb-2" data-bs-toggle="modal" data-bs-target=".bd-example-modal-lg"> <i class="fa fa-file-excel"></i> Import Data
        </button>
    </div>

    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Import Data</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal">
                    </button>
                </div>
                <div class="modal-body">
                    Template siswa dapat diunduh pada tombol disamping <a href="{{url('public')}}/assets/template-siswa.xlsx" class="btn btn-sm btn-dark" download=""><i class="fa fa-download"></i> Download Template</a>
                    <form action="{{ url('admin/siswa/import') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row mt-3">
                            <div class="col-md-12 mb-3">
                                <span>File Excel</span>
                                <input type="file" accept=".xls,.xlsx" required name="file" class="form-control">
                            </div>

                            <div class="col-md-12">
                                <button class="btn btn-primary" type="submit">Import Data</button>
                            </div>

                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger light" data-bs-dismiss="modal"> Close</button>
                </div>
            </div>
        </div>
    </div>

    <div class="table-responsive">
        <table class="table table-hover table-striped table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Aksi</th>
                    <th>Nama Siswa</th>
                    <th>Jenis Kelamin</th>
                    <th>Kelas</th>
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
                <td>
                   <div class="btn-group">
                        <a href="{{url('admin/ppdb',date('Y'))}}/{{$item->id}}" class="btn btn-dark"><i class="fa fa-eye"></i></a>
                    <a href="{{url('admin/siswa')}}/{{$item->id}}/edit" class="btn btn-success"><i class="fa fa-edit"></i></a>
                    <a href="{{url('admin/ppdb',date('Y'))}}/{{$item->id}}/tolak" onclick="return confirm('Lanjutkan Tolak')" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                   </div>
                </td>
                <td>{{strtoupper($item->nama_lengkap)}}</td>
                <td>{{ucwords($item->jenis_kelamin)}}</td>
                <td>{{ucwords($item->kelas)}}</td>
                <td>{{ucwords($item->tempat_lahir)}}, {{ucwords($item->tanggal_lahir)}}</td>
                <td>{{ \Carbon\Carbon::parse($item->tanggal_lahir)->age }} tahun</td>
                <td>{{ucwords($item->nik)}}</td>
                <td>{{ucwords($item->agama)}}</td>
                <td>{{ucwords($item->alamat)}}</td>
            </tr>
            @endforeach
        </table>

        <div class="col-md-12">
            {{$list_siswa->links()}}
        </div>
    </div>
</div>
</div>
@endsection