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
								<input type="text" required name="galeri_album" class="form-control">
							</div>

							<div class="col-md-6 mb-3">
								<div class="form-group">
									<span>Gambar : </span>
									<input type="file" class="form-control mb-3" required name="galeri_foto[]" accept="image/*" onchange="previewImage(event, this)">
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
		<input type="file" class="form-control" required name="galeri_foto[]" accept="image/*" onchange="previewImage(event, this)">
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