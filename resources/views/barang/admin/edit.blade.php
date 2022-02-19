<!DOCTYPE html>
<html>
<head>
	<title>Edit Data</title>
	@include('layouts.include.css')  
</head>
<body>
	<form method="POST" action="/edit/update/{{$data->id}}" enctype="multipart/form-data">
		@csrf
		<div class="container col-md-6">
			<div class="form-row">
				<div class="form-group col-md-6">
					<label for="inputEmail4">Nama Barang</label>
					<input type="text" class="form-control" placeholder="Nama Barang" name="nama_barang" value="{{$data->nama_barang}}">
				</div>
				<div class="form-group col-md-6">
					<label for="inputPassword4">Kode Barang</label>
					<input type="text" value="{{$data->kode}}" class="form-control" name="kode" placeholder="Masukan Kode">
				</div>
				<div class="form-group col-md-12">
					<select class="form-select col-md-12" required name="kategori_id" aria-label="Default select example">
						<option value="{{ $data->kategori_id }}">{{ $data->kategori->kategori }}</option>
						@foreach($kategoris as $kategori)
						<option value="{{ $kategori->id }}">{{ $kategori->kategori }}</option>
						@endforeach
					</select>
				</div>
			</div>
			<div class="form-group">
				<label for="inputAddress">Gambar</label>
				<input type="file" class="form-control" value="{{$data->gambar}}" name="gambar">
			</div>
			<div class="form-row">
				<div class="form-group col-md-6">
					<label for="inputAddress2">Harga</label>
					<input type="text" class="form-control" id="inputAddress2" value="{{$data->harga}}" placeholder="Masukan Nominal Harga" name="harga">
				</div>
				<div class="form-group col-md-6">
					<label for="inputCity">Stok</label>
					<input type="text" class="form-control" value="{{$data->stok}}" name="stok" placeholder="Jumlah Stok">
				</div>
			</div>
			<div class="form-group">
				<label for="exampleFormControlTextarea1">Keterangan</label>
				<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="keterangan">{{$data->keterangan}}</textarea>
			</div>	
			<a class="btn btn-danger" href="/dabar">Kembali</a>
			<button type="submit" class="btn btn-warning float-right">Edit</button>
		</div>
		
	</form>
</body>
</html>