@extends('admin.template.layout')
@section('content')

<div class="card">
    <div class="card-header">
        <h3>{{$title ?? 'SD Muhammadiyah Pontianak'}}</h3>

        <a href="{{url('admin/profil-sekolah/edit')}}" class="btn btn-primary float-right"> Update Profil</a>
    </div>
</div>
@endsection