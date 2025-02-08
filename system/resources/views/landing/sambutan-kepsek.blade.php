@extends('landing.layout')
@section('content')

<div class="row">
    <div class="col-md-4">
    <img src="{{$profil->foto_kepsek}}" width="100%" alt="">
    </div>

    <div class="col-md-8">
        {!!nl2br($profil->sambutan_kepsek)!!}
    </div>
</div>

@endsection