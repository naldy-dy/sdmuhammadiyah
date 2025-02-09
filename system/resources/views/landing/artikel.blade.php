@extends('landing.layout')
@section('content')

<section class="courses-section spad">
		<div class="container">
			
			<div class="row">
				@foreach($list_artikel as $item)
				<div class="col-xl-6">
					<div class="blog-item">
						<div class="blog-thumb set-bg" data-setbg="{{url($item->cover)}}"></div>
						<div class="blog-content">
							<b><a href="{{url('berita',$item->slug)}}" class="text-dark"> {{ucwords(Str::limit($item->judul,60))}}</a></b>
							<div class="blog-meta">
								<span><i class="fa fa-calendar-o"></i> 24 Mar 2018</span>
								<span><i class="fa fa-user"></i> Owen Wilson</span>
							</div>
							<p>{!!nl2br(Str::limit($item->isi,100))!!}</p>
						</div>
					</div>
				</div>
				@endforeach
				
                <div class="col-md-12">
                {{ $list_artikel->links() }}
                </div>
			</div>
		</div>
	</section>

@endsection