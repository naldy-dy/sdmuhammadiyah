@extends('admin.template.layout')
@section('content')
<style>
	/* Atur tinggi grafik */
	#chartContainer {
		width: 80%;
		max-width: 800px;
		height: 400px; /* Sesuaikan tinggi grafik */
		margin: auto;
	}
</style>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<div class="card">
	<div class="card-body">
		<h3>Selamat datang kembali</h3>
		<p>SD Muhammadiyah 3 Pontianak</p>
	</div>
</div>

<div class="card mt-3">
	<div class="card-body">
		<div class="row">
			<div class="col-md-6">
				<b>Jumlah Siswa Aktif/Kelas</b>
				<div id="chartContainer mt-5">
					<canvas id="siswaChart" style="height:auto;"></canvas>
				</div>
			</div>

			<div class="col-md-6">
				<div class="row">
					<center>
						<div class="col-md-8">
							<div class="card bg-primary">
								<div class="card-body text-white ">
									<h4 class="text-white">Total Siswa</h4>
									<h3 class="text-white">{{$totalSiswa ?? 0}}</h3>
								</div>
							</div>
						</div>

						<div class="col-md-8">
							<div class="card bg-primary">
								<div class="card-body text-white ">
									<h4 class="text-white">Total Laki-laki</h4>
									<h3 class="text-white">{{$totalLaki ?? 0}}</h3>
								</div>
							</div>
						</div>

						<div class="col-md-8">
							<div class="card bg-primary">
								<div class="card-body text-white ">
									<h4 class="text-white">Total Perempuan</h4>
									<h3 class="text-white">{{$totalPerempuan ?? 0}}</h3>
								</div>
							</div>
						</div>

						<div class="col-md-8">
							<div class="card bg-primary">
								<div class="card-body text-white ">
									<h4 class="text-white">Total Alumni</h4>
									<h3 class="text-white">{{$totalAlumni ?? 0}}</h3>
								</div>
							</div>
						</div>

					</center>
				</div>
			</div>
		</div>
	</div>
</div>

<script>
	var ctx = document.getElementById('siswaChart').getContext('2d');

	var colors = [
            'rgba(255, 99, 132, 0.7)',   // Merah
            'rgba(54, 162, 235, 0.7)',   // Biru
            'rgba(255, 206, 86, 0.7)',   // Kuning
            'rgba(75, 192, 192, 0.7)',   // Hijau
            'rgba(153, 102, 255, 0.7)',  // Ungu
            'rgba(255, 159, 64, 0.7)'    // Orange
            ];

	var siswaChart = new Chart(ctx, {
    type: 'pie', // Ubah ke 'pie' jika ingin pie chart
    data: {
        labels: @json($data->pluck('kelas')).map(kelas => "Kelas " + kelas), // Tambahkan "Kelas " sebelum setiap kelas
        datasets: [{
        	label: 'Jumlah Siswa',
        	data: @json($data->pluck('jumlah')),
        	backgroundColor: colors,
        	borderWidth: 1
        }]
    },
    options: {
    	responsive: true,
    	plugins: {
    		legend: {
    			position: 'bottom'
    		}
    	}
    }
});
</script>
@endsection