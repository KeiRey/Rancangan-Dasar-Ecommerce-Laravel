
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
     <h1>Check Out</h1>
     <nav class="d-flex align-items-center">
      <a href="index.html">Shop<span class="lnr lnr-arrow-right"></span></a><i class="fa fa-shopping-cart"></i>
    </nav>
  </div>
</div>
</div>
</section>


<div class="container">
  <div class="row">
   <div class="col-xl-12 col-lg-12 col-md-12">
    @if(session('succes'))
    <div class="alert alert-danger mt-3" role="alert">
     {{session('succes')}}
   </div>
   @endif

   <a href="/shop" class="btn btn-warning">Kembali</a>
   @if(empty($pesanan_details))

   <div class="col-md-12 mt-5">
     <div class="alert alert-danger" role="alert">
      <h4 align="center">
       Pesanan Kosong <br>
       <a href="/shop" class="btn btn-warning btn-sm mt-3">Pesan?</a>
     </h4>
   </div>
 </div>

 @else
 <h5 align="right">Tanggal Pesan {{ $pesanan->tanggal }}</h5>
 <table class="table table-hover">
   <thead>
    <th>No</th>
    <th>Gambar</th>
    <th>Nama Barang</th>
    <th>Jumlah</th>
    <th>Harga</th>
    <th>Total Harga</th>
    <th>Aksi</th>
  </thead>
  <tbody>
    @foreach($pesanan_details as $no => $pesanan_detail)
    <tr>
     <td>{{ $no+1 }}</td>
     <td>
      <img src="{{$pesanan_detail->barang->gambar()}}" width="100" alt="">
    </td>
    <td>{{ $pesanan_detail->barang->nama_barang }}</td>
    <td>{{ $pesanan_detail->jumlah }} item</td>
    <td>Rp. {{ number_format($pesanan_detail->barang->harga) }}</td>
    <td>Rp. {{ number_format($pesanan_detail->jumlah_harga) }}</td>
    <td>
      <form action="/check-out/{{ $pesanan_detail->id }}" method="post">
       @csrf
       {{ method_field('DELETE') }}
       <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash" onclick="return confirm('Yakin Mau Hapus?')"></i></button>
     </form>
   </td>
 </tr>
 @endforeach
 <tr>
   <td colspan="4" align="right"><strong>Total Harga :</strong></td>
   <td><strong>Rp. {{ number_format($pesanan->jumlah_harga) }}</strong></td>
   <td></td>
   <td>
    <a href="/konfirmasi" class="btn btn-success btn-sm" onclick="return confirm('Sudah Yakin Dengan Pesanan Anda?')">
     <i class="fa fa-shopping-cart">checkout</i>
   </a>
 </td>
</tr>
</tbody>
</table>
@endif
</div>
</div>
</div>
<!-- start footer Area -->
<div class="mt-5">
  @include('layouts.include.footer')
</div>
<!-- End footer Area -->

@include('layouts.include.js')
</body>

</html>



