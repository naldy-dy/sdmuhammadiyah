@extends('admin.template.layout')
@section('content')
<button type="button" class="btn btn-primary mb-2" data-bs-toggle="modal" data-bs-target=".bd-example-modal-lg"> <i class="fa fa-upload"></i> Upload Foto
	</button>

	<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Upload Foto</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal">
					</button>
				</div>
				<div class="modal-body">
					<form action="" method="post" enctype="multipart/form-data">
						@csrf
						<div class="row">
							<div class="col-md-12 mb-3">
								<span>Judul Album Galeri</span>
								<input type="text" required name="judul_kegiatan" class="form-control">
							</div>

							<div class="col-md-6 mb-3">
								<div class="form-group">
									<span>Gambar : </span>
									<input type="file" class="form-control mb-3" required name="foto[]" accept="image/*" onchange="previewImage(event, this)">
								</div>
							</div>

							<div class="col-md-6 mb-3">
								<center>
									<img id="imagePreview" src="" alt="Preview Gambar" style="max-width: 50%; display: none;">
								</center>
							</div>

							<div id="dynamicForm"></div>
							<div class="col-md-12">
								<button type="button" name="add" id="add_form"
								class="btn btn-sm btn-dark mb-3 mt-3"><i class="fa fa-plus"></i> Tambah Foto</button>
							</div>
							

							<div class="col-md-12">
								<button class="btn btn-primary" type="submit">SIMPAN</button>
							</div>

						</div>
					</form>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-danger light" data-bs-dismiss="modal"> Close</button>
				</div>
			</div>
		</div>
	</div>


	<div class="row">
		@foreach($list_galeri as $item)
		<div class="col-md-6 mb-3">
		<div id="carouselExampleCaptions{{$item->id}}" class="carousel slide" data-bs-ride="carousel">
                                        <ol class="carousel-indicators">
										@foreach(App\Models\GaleriDetail::where('galeri_id',$item->id)->get()->take(1) as $galeri)
                                            <li data-bs-target="#carouselExampleCaptions{{$item->id}}" data-bs-slide-to="0"
                                                class="active"></li>
												@endforeach
											@foreach(App\Models\GaleriDetail::where('galeri_id',$item->id)->get()->skip(1) as $galeri)
                                            <li data-bs-target="#carouselExampleCaptions{{$item->id}}" data-bs-slide-to="{{$loop->iteration}}"></li>
											@endforeach

                                        </ol>
                                        <div class="carousel-inner">
										@foreach(App\Models\GaleriDetail::where('galeri_id',$item->id)->get()->take(1) as $galeri)
                                            <div class="carousel-item active">
                                                <img src="{{url($galeri->foto)}}" class="d-block w-100" style="max-height: 350px;" alt="...">
                                                <div class="carousel-caption d-none d-md-block bg-dark">
                                                    <h5>{{ucwords($item->judul_kegiatan)}}</h5>
													<a href="{{url('admin/galeri',$item->id)}}/delete" class="btn btn-danger" onclick="return confirm('lanjutkan hapus?')"> <i class="fa fa-trash"></i> </a>
                                                </div>
                                            </div>
											@endforeach
											@foreach(App\Models\GaleriDetail::where('galeri_id',$item->id)->get()->skip(1) as $galeri)
                                            <div class="carousel-item">
                                                <img src="{{url($galeri->foto)}}" class="d-block w-100" style="max-height: 350px;" alt="...">
                                                
                                            </div>
											@endforeach
                                        </div>
                                        <a class="carousel-control-prev" href="#carouselExampleCaptions{{$item->id}}" role="button"
                                            data-bs-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" href="#carouselExampleCaptions{{$item->id}}" role="button"
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



    


    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

<script type="text/javascript">
	var i = 0;

	$("#add_form").click(function() {
		++i;

    // Membuat ID unik untuk setiap elemen gambar dan input file
		var addForm = `
		<div class="row" id="form_${i}">
		<div class="col-md-6 mb-3">
		<div class="form-group">
		<span>Gambar: </span>
		<input type="file" class="form-control" required name="foto[]" accept="image/*" onchange="previewImage(event, this)">
		</div>
		</div>

		<div class="col-md-6">
		<center>
		<img id="imagePreview_${i}" src="" alt="Preview Gambar" style="max-width: 50%; display: none;">
		</center>
		</div>

		<div class="col-md-12">
		<button type="button" class="btn btn-danger btn-sm remove-form">Hapus</button>
		</div>
		</div>
		`;

		$("#dynamicForm").append(addForm);
	});

	function previewImage(event, inputElement) {
		var reader = new FileReader();
		reader.onload = function() {
			var output = inputElement.closest('.row').querySelector('img');
			output.src = reader.result;
			output.style.display = 'block';
		};
		reader.readAsDataURL(event.target.files[0]);
	}

  // Menghapus form yang sudah ditambahkan
	$(document).on('click', '.remove-form', function() {
		$(this).closest('.row').remove();
	});
</script>
@endsection