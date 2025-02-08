@extends('landing.layout')
@section('content')

<div class="row">
    <div class="col-md-9">
    <div class="contaner">
           <center>
           <img src="{{url($detail->cover)}}" width="70%" alt="">
           </center>
           <br> <br>
           <b>Dibuat Pada : {{$detail->created_at}}</b> <br>
           <b>Dibaca : {{$detail->viewer}}x</b> <br> <br>

           {!!nl2br($detail->isi)!!}
</div>
    </div>

    <div class="col-md-3">
        <b>Berita Lainnya <hr></b>
        <div class="row">
            @foreach (App\Models\Berita::where('id','!=',$detail->id)->get()->take(5) as $lainnya)
            <div class="col-md-4 mb-3">
                <img src="{{url($lainnya->cover)}}" alt="">
            </div>
            <div class="col-md-8 mb-3">
                <p style="font-size: 10pt;"><a href="{{url('berita',$lainnya->slug)}}" class="text-dark">{{ucwords(Str::limit($lainnya->judul,60))}}</a></p>
            </div>
            @endforeach
        </div>
    </div>
</div>

@endsection