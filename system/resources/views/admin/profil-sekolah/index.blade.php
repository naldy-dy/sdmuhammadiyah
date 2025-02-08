@extends('admin.template.layout')
@section('content')

<div class="card">
    <div class="card-header">
    <div class="d-flex justify-content-between align-items-center">
            <h3>{{ $title ?? '' }}</h3>
            <a href="{{url('admin/profil-sekolah/edit')}}" class="btn btn-primary"><i class="fa fa-pencil-alt"></i> Update Profil</a>
        </div>

    </div>
</div>
@endsection