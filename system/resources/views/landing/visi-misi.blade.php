@extends('landing.layout')
@section('content')

<div class="row">
    <div class="col-md-12 mb-5">
        <h3>Visi</h3>
        {!!nl2br($profil->visi)!!}
    </div>

    <div class="col-md-8">
        <h3>Misi</h3>
        {!!nl2br($profil->misi)!!}
    </div>
</div>

@endsection