@extends('admin.template.layout')
@section('content')

<div class="card">
    <div class="card-header">
        <h3>{{$title ?? 'SD Muhammadiyah Pontianak'}}</h3>

    </div>
</div>

<div class="card">
    <div class="card-body">
        <form action="{{url('admin/profil-sekolah',$profil->id)}}/edit" method="post" enctype="multipart/form-data">
            @csrf
            @method("PUT")
            <div class="row">

            <div class="col-md-12 mb-3">
                    <span>Judul Landing</span>
                    <input type="text" class="form-control" name="judul" value="{{$profil->judul}}">
                </div>

                <div class="col-md-6 mb-3">
                    <span>Deskripsi Landing</span>
                    <input type="text" class="form-control" name="deskripsi" value="{{$profil->deskripsi}}">
                </div>


            <div class="col-md-12 mb-5">
                    <span>Tentang Sekolah</span>
                    <textarea name="tentang" class="form-control summernote" id="">{!!nl2br($profil->tentang ?? '')!!}</textarea>
                </div>

                <div class="col-md-12 mb-5">
                    <span>Visi Sekolah</span>
                    <textarea name="visi" class="form-control summernote" id="">{!!nl2br($profil->visi ?? '')!!}</textarea>
                </div>

                <div class="col-md-12 mb-5">
                    <span>Misi Sekolah</span>
                    <textarea name="misi" class="form-control summernote" id="">{!!nl2br($profil->misi ?? '')!!}</textarea>
                </div>

                <div class="col-md-12 mb-5">
                    <span>Sambutan Kepala Sekolah</span>
                    <textarea name="sambutan_kepsek" class="form-control summernote" id="">{!!nl2br($profil->sambutan_kepsek ?? '')!!}</textarea>
                </div>
                
                <div class="mb-5 col-md-8">
                    <span>Gambar Kepsek</span>
                    <input type="file" class="form-control" name="foto_kepsek" onchange="previewImageKepsek(event)">
                </div>

                <div class="mb-5 col-md-4">
                <img id="imagePreviewKepsek" src="" alt="Preview Gambar" style="max-width: 70%; display: none;">
                        <!-- hasil foto kepsep -->
                </div>


                <div class="mb-5 col-md-8">
                    <span>Gambar Utama Website</span>
                    <input type="file" class="form-control" name="gambar_utama" onchange="previewImageUtama(event)" required>
                </div>

                <div class="mb-5 col-md-4">
                        <!-- hasil foto sekolah -->
                        <img id="imagePreviewUtama" src="" alt="Preview Gambar" style="max-width: 70%; display: none;">
                </div>

                <div class="mb-5 col-md-4">
                    <span>Email Sekolah</span>
                    <input type="text" class="form-control" name="email" value="{{$profil->email ?? ''}}">
                </div>
                <div class="col-md-4 mb-3">
                    <span>Nomor WA/Telp Sekolah</span>
                    <input type="text" class="form-control" name="no_wa" value="{{$profil->no_wa ??' '}}">
                </div>
                <div class="col-md-4 mb-3">
                    <span>Logo Sekolah</span>
                    <input type="file" class="form-control" name="logo_sekolah" onchange="previewImageLogo(event)">
                    <img id="imagePreviewLogo" src="" alt="Preview Gambar" style="max-width: 50%; display: none;">
                </div>

                <div class="col-md-6 mb-3">
                    <span>Waktu Pelajaran</span>
                    <input type="text" class="form-control" name="waktu_pelajaran" value="{{$profil->waktu_pelajaran ?? ''}}">
                </div>

                <div class="col-md-6 mb-3">
                    <span>Alamat Lengkap</span>
                    <input type="text" class="form-control" name="alamat_lengkap" value="{{$profil->alamat_lengkap ?? ''}}">
                </div>

                <div class="col-md-12 mb-3">
                    <textarea name="maps" class="form-control summernote" id="">{{$profil->maps}}</textarea>
                </div>

                <div class="col-md-12">
                    <button class="btn btn-primary btn-block">UPDATE PROFIL SEKOLAH</button>
                </div>
            </div>
        </form>
    </div>
</div>


<script>
	function previewImageKepsek(event) {
		var reader = new FileReader();
		reader.onload = function() {
			var output = document.getElementById('imagePreviewKepsek');
			output.src = reader.result;
			output.style.display = 'block'; // Menampilkan gambar setelah dipilih
		};
		reader.readAsDataURL(event.target.files[0]);
	}


    function previewImageUtama(event) {
		var reader = new FileReader();
		reader.onload = function() {
			var output = document.getElementById('imagePreviewUtama');
			output.src = reader.result;
			output.style.display = 'block'; // Menampilkan gambar setelah dipilih
		};
		reader.readAsDataURL(event.target.files[0]);
	}

    function previewImageLogo(event) {
		var reader = new FileReader();
		reader.onload = function() {
			var output = document.getElementById('imagePreviewLogo');
			output.src = reader.result;
			output.style.display = 'block'; // Menampilkan gambar setelah dipilih
		};
		reader.readAsDataURL(event.target.files[0]);
	}
</script>
@endsection