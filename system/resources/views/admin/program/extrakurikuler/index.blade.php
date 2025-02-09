@extends('admin.template.layout')
@section('content')
<button type="button" class="btn btn-primary mb-2" data-bs-toggle="modal" data-bs-target=".bd-example-modal-lg"> <i class="fa fa-plus"></i> Extrakurikuler Sekolah
	</button>

	<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Upload Extrakurikuler</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal">
					</button>
				</div>
				<div class="modal-body">
					<form action="" method="post" enctype="multipart/form-data">
						@csrf
						<div class="row">
							<div class="col-md-12 mb-3">
								<span>Nama Extrakurikuler</span>
								<input type="text" required name="nama" class="form-control">
							</div>

							<div class="col-md-6 mb-3">
								<div class="form-group">
									<span>Logo/Foto : </span>
									<input type="file" class="form-control mb-3" required name="foto" accept="image/*" onchange="previewImage(event, this)">
								</div>
							</div>

                            <div class="col-md-6 mb-3">
								<center>
									<img id="imagePreview" src="" alt="Preview Gambar" style="max-width: 50%; display: none;">
								</center>
							</div>

                            <div class="col-md-12 mb-3">
                                <span>Deskripsi</span>
                                <textarea name="deskripsi" class="form-control summernote" id=""></textarea>
                            </div>

							<div class="col-md-12">
								<button class="btn btn-primary" type="submit">Tambah</button>
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


   @foreach($list_extra as $item)
   <div class="card mb-3">
    <div class="card-body">
        <div class="row">
            <div class="col-md-4">
                <img src="{{url($item->foto)}}" width="100%" alt="">
            </div>
            <div class="col-md-8">
                <b>{{ucwords($item->nama)}}</b> <br>
                {!!nl2br($item->deskripsi)!!} <br><br>

                <a href="{{url('admin/extrakurikuler',$item->id)}}/delete" onclick="return confirm('Hapus data?')" class="btn btn-danger"><i class="fa fa-trash"></i></a>
            </div>
        </div>
    </div>
   </div>
   @endforeach

   <div class="col-md-12">
    {{$list_extra->links()}}
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