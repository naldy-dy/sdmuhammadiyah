@extends('landing.layout')
@section('content')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


<div class="row">
		@foreach($list_galeri as $item)
		<div class="col-md-6 mb-3">
		<div id="nextgambar{{$item->id}}" class="carousel slide" data-bs-ride="carousel">
                                        <ol class="carousel-indicators">
										@foreach(App\Models\GaleriDetail::where('galeri_id',$item->id)->get() as $index => $galeri)
                            <li data-bs-target="#nextgambar{{$item->id}}" data-bs-slide-to="{{$index}}" class="{{ $index == 0 ? 'active' : '' }}"></li>
                        @endforeach

                                        </ol>
                                        <div class="carousel-inner">
										@foreach(App\Models\GaleriDetail::where('galeri_id',$item->id)->get()->take(1) as $galeri)
                                            <div class="carousel-item active">
                                                <img src="{{url($galeri->foto)}}" class="d-block w-100" style="max-height: 350px;" alt="...">
                                                <div class="carousel-caption d-none d-md-block text-white bg-dark">
                                                    <h5>{{ucwords($item->judul_kegiatan)}}</h5>
													
                                                </div>
                                            </div>
											@endforeach
											@foreach(App\Models\GaleriDetail::where('galeri_id',$item->id)->get()->skip(1) as $galeri)
                                            <div class="carousel-item">
                                                <img src="{{url($galeri->foto)}}" class="d-block w-100" style="max-height: 350px;" alt="...">
                                                
                                            </div>
											@endforeach
                                        </div>
                                        <a class="carousel-control-prev" href="#nextgambar{{$item->id}}" role="button"
                                            data-bs-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" href="#nextgambar{{$item->id}}" role="button"
                                            data-bs-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Next</span>
                                        </a>
                                    </div>
		</div>
		@endforeach


		<div class="col-md-12">
			{{$list_galeri->links()}}
		</div>
	</div>
@endsection