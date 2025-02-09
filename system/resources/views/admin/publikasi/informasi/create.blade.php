@extends('admin.template.layout')
@section('content')

<div class="card mb-3">
    <div class="card-header">
        <div class="d-flex justify-content-between align-items-center">
            <h3>{{ $title ?? '' }}</h3>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-body">
        <form action="" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
            <div class="col-md-12 mb-3">
                    <span>Judul Informasi</span>
                    <input type="text" class="form-control" required name="judul">
                </div>

                <div class="col-md-12 mb-3">
                    <span>Cover Informasi</span>
                    <input type="file" accept="image/*" class="form-control mb-2" required name="cover" onchange="previewImage(event)">
                    <img id="imagePreview" src="" alt="Preview Gambar" style="max-width: 50%; display: none;">
                </div>

                <div class="col-md-12 mb-3">
                    <span>Isi Informasi</span>
                    <textarea name="isi" class="form-control summernote" id=""></textarea>
                </div>

                <div class="col-md-12 mb-3">
                    <button class="btn btn-primary float-right">Post Informasi</button>
                </div>
            </div>
        </form>
    </div>
</div>


<script>
    function previewImage(event) {
		var reader = new FileReader();
		reader.onload = function() {
			var output = document.getElementById('imagePreview');
			output.src = reader.result;
			output.style.display = 'block'; // Menampilkan gambar setelah dipilih
		};
		reader.readAsDataURL(event.target.files[0]);
	}
</script>
@endsection