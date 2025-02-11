@extends('admin.template.layout')
@section('content')


<div class="card">
	<div class="card-body">
		<h3 class="text-danger">Ganti Password</h3>
		<form action="{{url('admin/profil-akun/ganti-password')}}" method="post">
			@csrf
			<div class="row">
				<div class="mb-3 col-md-6">
					<span>Password Baru</span>
					<input type="password" class="form-control" name="new" minlength="5" placeholder="New Password">
				</div>
				<div class="mb-3 col-md-6">
					<span>Konfirmasi Password Baru</span>
					<input type="password" class="form-control" name="confirm" minlength="5" placeholder="Confirm New Password">
				</div>

				<div class="mb-3 col-md-12">
					<button class="btn btn-danger float-right"><i class="fa fa-key"></i> Ganti Password</button>
				</div>
			</div>
		</form>
	</div>
</div>
@endsection