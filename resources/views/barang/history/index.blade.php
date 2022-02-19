
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
     <h1>Riwayat</h1>
     <nav class="d-flex align-items-center">
      <a href="index.html">Shop<span class="lnr lnr-arrow-right"></span></a>
      <a>Riwayat</a>
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

   <div class="card mt-3">
     <div class="card-body">
      <h4><i class="fa fa-history"></i> Riwayat Pemesanan</h4>
      <table class="table table-striped">
       <thead>
        <tr>
         <td>No</td>
         <td>Tanggal</td>
         <td>Kode Pesanan</td>
         <td>Status</td>
         <td>Jumlah Harga</td>
         <td>Detail</td>
       </tr>
     </thead>
     <tbody>
      @foreach($pesanans as $no =>$pesanan)
      <tr>
       <td>{{ $no+1 }}</td>
       <td>{{ $pesanan->tanggal }}</td>
       <td>{{ $pesanan->kode }}</td>
       <td>
        @if($pesanan->status == 1)
        Belum Dibayar
        @else
        Sudah Dibayar
        @endif
      </td>
      <td>Rp. {{number_format($pesanan->jumlah_harga)}}</td>
      <td>
        <a href="/history/{{$pesanan->id}}" class="btn btn-primary"><i class="fa fa-info"></i> Detail</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
</div>

</div>
</div>
</div>
<!-- Start related-product Area -->
<!-- End related-product Area -->

<!-- start footer Area -->
<div class="mt-5">
  @include('layouts.include.footer')
</div>

@include('layouts.include.js')

</body>

</html>



