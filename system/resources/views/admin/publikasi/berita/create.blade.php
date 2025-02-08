@extends('admin.template.layout')
@section('content')

<div class="card">
    <div class="card-header">
        <div class="d-flex justify-content-between align-items-center">
            <h3>{{ $title ?? '' }}</h3>
        </div>
    </div>
</div>

@endsection