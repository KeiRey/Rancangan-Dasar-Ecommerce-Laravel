<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
	
	<center>
		<H3>Data Pembelian</H3>
		<h2>KOPERASIKU</h2><hr>
		<p>Jl.JCC, Gandul, Kec.Cinere, Kota Depok</p>
	</center>
	<table class="table table-striped">
		<thead>
			<tr>
				<td><b>No</b></td>
				<td><b>Pembeli</b></td>
				<td><b>Tanggal</b></td>
				<td><b>Status</b></td>
				<td><b>Kode</b></td>
				<td><b>Total Harga</b></td>
			</tr>
		</thead>
		<tbody>
			@foreach($pesanan as $no => $isi)
			<tr>
				<td>{{ $no+1 }}</td>
				<td>{{ $isi->user->name}}</td>
				<td>{{ $isi->tanggal }}</td>
				<td>
					@if($isi->status == 1)
					Belum Dibayar
					@else
					Sudah DIbayar
					@endif
				</td>
				<td>{{ $isi->kode }}</td>
				<td>Rp. {{ number_format($isi->jumlah_harga) }}</td>
			</tr>
			@endforeach
		</tbody>
	</table>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>