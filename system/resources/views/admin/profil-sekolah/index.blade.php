@extends('admin.template.layout')
@section('content')

<div class="card mb-3">
    <div class="card-header">
        <div class="d-flex justify-content-between align-items-center">
            <h3>{{ $title ?? '' }}</h3>
            <a href="{{url('admin/profil-sekolah/edit')}}" class="btn btn-primary"><i class="fa fa-pencil-alt"></i> Update Profil</a>
        </div>

    </div>
</div>


<div class="card">
    <div class="card-body">
        <div class="row">
           
            <div class="col-md-6 mb-5">
                <b class="text-primary">Tentang</b><hr><br>
                 <img src="{{url($profil->gambar_utama ?? '')}}" width="100%" alt="">
                {!!nl2br($profil->tentang ?? '')!!}
            </div>

             <div class="col-md-6 mb-5">
                <b class="text-primary">Sambutan Kepala Sekolah</b><hr><br>
               <p>
                   <img src="{{url($profil->foto_kepsek)}}" width="200px" alt="">
                   {!!nl2br($profil->sambutan_kepsek)!!}
               </p>
            </div>


            <div class="col-md-6 mb-5">
                <b class="text-primary">Visi</b><hr><br>
                {!!nl2br($profil->visi)!!}
            </div>
            <div class="col-md-6 mb-5">
                <b class="text-primary">Visi</b><hr><br>
                {!!nl2br($profil->misi)!!}
            </div>
        </div>
    </div>
</div>
@endsection