@extends('admin.template.layout')
@section('content')

<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-md-4">
<img src="{{url($detail->cover)}}" width="100%" alt="">
            </div>

            <div class="col-md-8">
                <h3>{{$detail->judul}}</h3>
                <b>Dibuat : {{$detail->created_at}}</b> <br>
                <b>Viewer : {{$detail->viewer}} x</b> <br> <br>

                {!!nl2br($detail->isi)!!}
            </div>
        </div>
    </div>
</div>
@endsection