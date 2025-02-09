@extends('landing.layout')
@section('content')



<div class="row">
   @foreach($list_guru as $item)
   <div class="col-md-3">
    <div class="card mb-3">
        <div class="card-body">
        <img src="{{url($item->foto)}}" width="100%" alt=""> <br>
        <center>
            <b>{{ucwords($item->nama)}}</b>
            <p>({{ucwords($item->jabatan)}})</p>
        </center>
        </div>
    </div>
   </div>
   @endforeach
   </div>

@endsection