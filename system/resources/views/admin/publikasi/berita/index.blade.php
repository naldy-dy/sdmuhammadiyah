@extends('admin.template.layout')
@section('content')

<div class="card">
    <div class="card-header">
        <div class="d-flex justify-content-between align-items-center">
            <h3>{{ $title ?? '' }}</h3>
            <a href="{{url('admin/berita/create')}}" class="btn btn-primary"><i class="fa fa-plus"></i> Buat Berita</a>
        </div>
    </div>
</div>

<div class="row">
	@foreach($list_berita as $item)
	<div class="col-lg-12 col-xl-6">
		<div class="card">
			<div class="card-body">
				<div class="row m-b-30">
					<div class="col-xl-5 col-md-4 col-sm-5">
						<div class="new-arrival-product mb-4 mb-xxl-4 mb-md-0">
							<div class="new-arrivals-img-contnent">
								<img src="{{url('')}}/{{$item->cover}}" width="100%" height="200px" alt="">
							</div>
						</div>
					</div>
					<div class="col-xl-7 col-md-8 col-sm-7">
						<div class="new-arrival-content position-relative">
							<b><a href="{{url('admin/berita',$item->slug)}}/show">{{ucwords($item->judul)}}</a></b>
							<div class="comment-review star-rating">
								Pengunjung : {{$item->viewer}} <br>
								<span class="review-text">Dibuat pada : {{ \Carbon\Carbon::parse($item->created_at)->isoFormat('D MMMM YYYY') }}</span>
							</div>

							<p class="text-content">
								

								<div class="float-right mt-3">
								<a href="{{url('admin/berita',$item->slug)}}/edit" class="btn btn-sm btn-dark"><i class="fa fa-edit"></i></a>

							<a href="{{url('admin/berita',$item->slug)}}/delete" onclick="return confirm('lanjutkan menghapus?')" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
							</div>
							</p>
							
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	@endforeach

	<div class="col-md-12">
		{{ $list_berita->links() }}

	</div>
@endsection