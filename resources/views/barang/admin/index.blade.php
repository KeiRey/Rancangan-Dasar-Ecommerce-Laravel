
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
     <h1>Data Barang</h1>
     <nav class="d-flex align-items-center">
      <a href="index.html">Admin<span class="lnr lnr-arrow-right"></span></a>Data Barang
    </nav>
  </div>
</div>
</div>
</section>


<div class="container">
  <div class="row">
   <div class="col-xl-12 col-lg-12 col-md-12">
         <!--  @if(session('succes'))
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
         @endif -->
         <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#exampleModal">
           Tambah
         </button>


         <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
           <div class="modal-dialog" role="document">
            <div class="modal-content">
             <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Tambah Barang</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
             </button>
           </div>
           <div class="modal-body">

            <form action="/dabar/tambah" method="POST" enctype="multipart/form-data">
             @csrf
             
             <div class="form-row">
              <div class="form-group col-md-12">
                <label for="inputEmail4">Nama Barang</label>
                <input type="text" class="form-control" placeholder="Nama Barang" name="nama_barang">


                <select class="form-select mt-3" required name="kategori_id" aria-label="Default select example">
                  <option selected>Kategori</option>
                  @foreach($kategoris as $kategori)
                  <option value="{{ $kategori->id }}">{{ $kategori->kategori }}</option>
                  @endforeach
                </select>
              </div>
              
            </div>
            <div class="form-group">
              <label for="inputAddress">Gambar</label>
              <input type="file" class="form-control" name="gambar">
            </div>
            
            <div class="form-group">
              <label for="inputPassword4">Kode Barang</label>
              <input type="text" class="form-control" name="kode" placeholder="Masukan Kode">
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
               <label for="inputAddress2">Harga</label>
               <input type="text" class="form-control" id="inputAddress2" placeholder="Masukan Nominal Harga" name="harga">
             </div>
             <div class="form-group col-md-6">
               <label for="inputCity">Stok</label>
               <input type="text" class="form-control" name="stok" placeholder="Jumlah Stok">
             </div>
           </div>
           <div class="form-group">
            <label for="exampleFormControlTextarea1">Keterangan</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="keterangan"></textarea>
          </div>	
        </div>
        <div class="modal-footer">
         <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
         <button type="submit" class="btn btn-primary">Tambah</button>
       </div>
     </form>
   </div>
 </div>
</div>


<table class="table table-hover">
 <thead>
  <tr>
   <th scope="col">Aksi</th>
   <th scope="col">Gambar</th>
   <th scope="col">Nama Barang</th>
   <th scope="col">Kode Barang</th>
   <th scope="col">Harga</th>
   <th scope="col">Stok</th>
 </tr>
</thead>
<tbody>
  @foreach($data as $no => $isi)
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
<th> <img src="{{$isi->gambar()}}" width="100" class="rounded mx-auto d-block"></th>
<td>
  {{$isi->nama_barang}}
</td>
<td>{{$isi->kode}}</td>
<td>Rp. {{number_format($isi->harga)}}</td>
<td>{{$isi->stok}}</td>
</tr>
@endforeach
</tbody>
<tr>
  <td colspan="6">
   <div class="filter-bar d-flex flex-wrap align-items-center mb-5">
    <div class="sorting mr-auto">
     Tampilan
     {{ $data->firstItem() }}
     Sampai
     {{ $data->lastItem() }}
     Item, dari
     {{ $data->total() }}
     total barang

   </div>
   <div class="btn btn-sm pagination">
     {{$data->links()}}
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



