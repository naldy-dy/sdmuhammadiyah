@extends('admin.template.layout')
@section('content')
<button type="button" class="btn btn-primary mb-2" data-bs-toggle="modal" data-bs-target=".bd-example-modal-lg"> <i class="fa fa-plus"></i> Buka PPDB Sekolah
	</button>

	<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">PPDB Sekolah</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal">
					</button>
				</div>
				<div class="modal-body">
					<form action="" method="post" enctype="multipart/form-data">
						@csrf
						<div class="row">
							<div class="col-md-12 mb-3">
								<span>Tanggal Pembukaan</span>
								<input type="date" required name="tanggal_mulai" class="form-control">
							</div>

							<div class="col-md-12 mb-3">
								<span>Tanggal Penutupan</span>
								<input type="date" required name="tanggal_selesai" class="form-control">
							</div>

							

							<div class="col-md-12">
								<button class="btn btn-primary" type="submit">Buka PPDB</button>
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


	<div class="card">
		<div class="card-body">
			<table class="table table-bordered table-hover table-striped">
				<thead>
					<tr>
						<th>No</th>
						<th>Tahun Pembukaan</th>
						<th>Status PPDB</th>
						<th>Tanggal Pembukaan</th>
						<th>Tanggal Penutupan</th>
						<th>Aksi</th>
					</tr>
				</thead>

				@foreach($list_ppdb as $item)
				<tr>
					<td>{{$loop->iteration}}</td>
					<td>{{$item->ppdb_tahun}}</td>
					<td>
						@if($item->ppdb_status == 1)
							<span class="btn btn-success">Buka</span>
						@elseif($item->ppdb_status == 0)
							<span class="btn btn-danger">Tutup</span>
						@endif
					</td>
					<td>{{$item->tanggal_mulai}}</td>
					<td>{{$item->tanggal_selesai}}</td>
					<td>
						<a href="" class="btn btn-danger"> Tutup PPDB</a>
					</td>
				</tr>
				@endforeach
			</table>
		</div>
	</div>




   
@endsection