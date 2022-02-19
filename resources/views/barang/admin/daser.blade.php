
<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
	@include('layouts.include.css')
</head>

<body id="category">

	<!-- Start Header Area -->
	@include('layouts.include.navbar')
	<!-- End Header Area -->

	<!-- Start Banner Area -->

	<section class="banner-area organic-breadcrumb">
		<div class="container">
			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
				<div class="col-first">
					<h1>Data User</h1>
					<nav class="d-flex align-items-center">
						<a href="index.html">Admin<span class="lnr lnr-arrow-right"></span></a>Data User
					</nav>
				</div>
			</div>
		</div>
	</section>

	
	<div class="container">
		<div class="row">
			<div class="col-xl-12 col-lg-12 col-md-12">
				@if(session('succes'))
				<div class="alert alert-success" role="alert">
					{{session('succes')}}
				</div>
				@endif
				@if(session('sukses'))
				<div class="alert alert-danger" role="alert">
					{{session('sukses')}}
				</div>
				@endif
				@if(session('hore'))
				<div class="alert alert-warning" role="alert">
					{{session('hore')}}
				</div>
				@endif
				<button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#exampleModal">
					Tambah
				</button>
				@include('barang.admin.create')
				<table class="table table-hover">
					<thead>
						<tr>
							<th scope="col">Aksi</th>
							<th scope="col">Nama</th>
							<th scope="col">Email</th>
							<th scope="col">Telepon</th>
							<th scope="col">Alamat</th>
						</tr>
					</thead>
					<tbody>
						@foreach($daser as $no => $isi)
						<tr>
							<th scope="row"> 
								<ul class="nav navbar-nav menu_nav ml-auto">
									<li class="nav-item submenu dropdown">
										<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Aksi</a>
										<ul class="dropdown-menu" style="display: none;">
											<li class="nav-item"><a class="nav-link" href="/edit/{{$isi->id}}">Edit</a></li>
											<li class="nav-item"><a class="nav-link" href="/debar/{{$isi->id}}">Detail</a></li>
											<li class="nav-item"><a class="nav-link" href="/dabar/delete/{{$isi->id}}" onclick="return confirm('Yakin Mau Hapus?')">Hapus</a></li>
										</ul>
									</li>
								</ul>
							</th>
							<td>
								{{$isi->name}}
							</td>
							<td>{{$isi->email}}</td>
							<td>{{$isi->notelp}}</td>
							<td>{{$isi->alamat}}</td>
						</tr>
						@endforeach
					</tbody>
					<tr>
						<td colspan="6">
							<div class="filter-bar d-flex flex-wrap align-items-center mb-5">
								<div class="sorting mr-auto">

								</div>
								<div class="btn btn-sm pagination">
								</div>
							</div>
						</td>
					</tr>
				</table>
			</div>
		</div>
	</div>
	<!-- Start related-product Area -->
	<!-- End related-product Area -->

	<!-- start footer Area -->
	@include('layouts.include.footer')
	<!-- End footer Area -->

	@include('layouts.include.js')
</body>

</html>



