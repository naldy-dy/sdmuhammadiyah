@extends('landing.layout')
@section('content')

<div class="row">
    <div class="col-md-4">
    <img src="{{$profil->logo_sekolah}}" width="100%" alt="">
    </div>

    <div class="col-md-8">
        {!!nl2br($profil->tentang)!!}
    </div>
</div>

@endsection