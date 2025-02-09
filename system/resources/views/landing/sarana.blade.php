@extends('landing.layout')
@section('content')

@foreach($list_sarana as $item)
   <div class="card mb-3">
    <div class="card-body">
        <div class="row">
            <div class="col-md-4">
                <img src="{{url($item->foto)}}" width="100%" alt="">
            </div>
            <div class="col-md-8">
                <b>{{ucwords($item->sarana)}}</b> <br>
                {!!nl2br($item->deskripsi)!!} <br><br>

                
            </div>
        </div>
    </div>
   </div>
   @endforeach

   <div class="col-md-12">
    {{$list_sarana->links()}}
   </div>

   @endsection