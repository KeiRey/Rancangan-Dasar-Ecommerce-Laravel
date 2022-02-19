
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
     <h1>Detail Riwayat</h1>
     <nav class="d-flex align-items-center">
      <a href="index.html">Home<span class="lnr lnr-arrow-right"></span></a>
      <a href="/shop">Riwayat</a>
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

   <div class="col-md-12">
     <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
       <li class="breadcrumb-item">
        <h5>Pesanan anda sudah sukses dicheck out, untuk pembayaran silahkan transfer <br> ke rekening  <strong>Bank BRI Nomor Rekening : 09312-12312-213</strong>  dengan nominal <strong>Rp. {{ number_format($pesanan->jumlah_harga) }}</strong></h5>
      </li>
    </ol>
  </nav>
</div>

@if(!empty($pesanan))
<a href="/history" class="btn btn-warning">Kembali</a>
<h5 align="right">Tanggal Pesan {{ $pesanan->tanggal }}</h5>
<table class="table table-striped">
 <thead>
  <th>No</th>
  <th>Gambar</th>
  <th>Nama Barang</th>
  <th>Jumlah</th>
  <th>Harga</th>
  <th>Total Harga</th>
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

</tr>
@endforeach
<tr>
 <td colspan="2"></td>
 <td colspan="3" align="right"><strong>Total Harga:</strong></td>
 <td><strong>Rp. {{ number_format($pesanan->jumlah_harga) }}</strong></td>

</tr>
<tr>
 <td colspan="2"></td>
 <td colspan="3" align="right"><strong>Kode Unik:</strong></td>
 <td><strong>{{ $pesanan->kode }}</strong></td>

</tr>
<tr>
 <td colspan="2"></td>
 <td colspan="3" align="right"><strong>Total Pembayaran:</strong></td>
 <td><strong>Rp. {{ number_format($pesanan->jumlah_harga) }}</strong></td>

</tr>
</tbody>
</table>
@endif
</div>
</div>
</div>
<!-- Start related-product Area -->
<!-- End related-product Area -->

<!-- start footer Area -->
<div class="mt-5">
  @include('layouts.include.footer')
</div>
<!-- End footer Area -->


@include('layouts.include.js')
</body>

</html>



