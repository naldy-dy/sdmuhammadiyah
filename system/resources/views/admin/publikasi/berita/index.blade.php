@extends('admin.template.layout')
@section('content')

<div class="card">
    <div class="card-header">
        <div class="d-flex justify-content-between align-items-center">
            <h3>{{ $title ?? '' }}</h3>
            <a href="{{url('admin/berita/create')}}" class="btn btn-primary"><i class="fa fa-plus"></i> Buat Berita</a>
        </div>
    </div>
</div>

@endsection