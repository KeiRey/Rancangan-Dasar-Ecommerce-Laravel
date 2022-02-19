
<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
  @include('layouts.include.css')  
</head>

<body>

  <!-- Start Header Area -->
  @include('layouts.include.navbar')
  <!-- End Header Area -->

  <!-- Start Banner Area -->
  <section class="banner-area organic-breadcrumb">
    <div class="container">
      <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
        <div class="col-first">
          <h1>Detail {{$detail->nama_barang}}</h1>
          <nav class="d-flex align-items-center">
            <a href="index.html">Home<span class="lnr lnr-arrow-right"></span></a>
            <a href="/shop">Shop<span class="lnr lnr-arrow-right"></span></a>
            <a href="single-product.html">{{$detail->nama_barang}}</a>
          </nav>
        </div>
      </div>
    </div>
  </section>
  <!-- End Banner Area -->  
  <!--================Single Product Area =================-->
  <div class="product_image_area">
    <div class="container">
      <div class="row s_product_inner">
        <div class="col-lg-6">
          <img src="{{$detail->gambar()}}" width="400" alt="">
        </div>
        <div class="col-lg-5 offset-lg-1">
          <div class="s_product_text">
            <h3>{{$detail->nama_barang}}</h3>
            <h2>Rp {{number_format($detail->harga)}}</h2>
            <li><span>Kode Barang</span>: {{$detail->kode}}</li><hr>
            <li><span>Harga Barang</span>:{{$detail->harga}}</li><hr>
            <li><span>Stok</span>: {{$detail->stok}}</li><hr>
            <li><span>Kategori</span>: {{ $detail->kategori->kategori }}</li>
            <p>Keterangan: <br>{{$detail->keterangan}}</p>
            <div class="card_area d-flex align-items-center mb-5">
             <a href="/dabar" class="genric-btn danger radius">Kembali</a>&nbsp &nbsp &nbsp
           </div>
         </div>
       </div>
     </div>
   </div>
 </div>
 @include('layouts.include.footer')
 <!-- End footer Area -->

 @include('layouts.include.js')

</body>

</html>