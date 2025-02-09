@extends('landing.layout')
@section('content')

<div class="row">
   @foreach($list_prestasi as $item)
   <div class="col-md-4">
    <div class="card mb-3">
        <div class="card-body">
        <img src="{{url($item->foto)}}" width="100%" height="300px" alt=""> <br>
        <center>
            <b>{{ucwords($item->nama)}}</b>
            <p>{{ucwords($item->judul)}}</p>
            <b>Tahun {{ Carbon\Carbon::parse($item->created_at)->format('Y') }}
            </b>
        </center>
        </div>
    </div>
   </div>
   @endforeach
   </div>

   <div class="col-md-12">
    {{$list_prestasi->links()}}
   </div>


@endsection