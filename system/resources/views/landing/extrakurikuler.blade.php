@extends('landing.layout')
@section('content')

@foreach($list_extra as $item)
   <div class="card mb-5">
    <div class="card-body">
        <div class="row">
            <div class="col-md-4">
               <center>
                  <img src="{{url($item->foto)}}" width="60%" alt="">
               </center>
            </div>
            <div class="col-md-8">
                <b>{{ucwords($item->nama)}}</b> <br>
                {!!nl2br($item->deskripsi)!!} <br><br>

                
            </div>
        </div>
    </div>
   </div>
   @endforeach

   <div class="col-md-12">
    {{$list_extra->links()}}
   </div>

   @endsection