
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
          <h1>Pesan {{$pesan->nama_barang}}</h1>
          <nav class="d-flex align-items-center">
            <a href="index.html">Shop<span class="lnr lnr-arrow-right"></span></a>
            <p>Pesan<span class="lnr lnr-arrow-right"></span></p>
            <a href="single-product.html">{{$pesan->nama_barang}}</a>
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
        <div class="col-lg-6 mb-5">
         <a href="/shop" class="genric-btn danger radius">Kembali</a><br>
         <div class="mt-5">
           <img src="{{$pesan->gambar()}}" width="400" alt="">
         </div>
       </div>
       <div class="col-lg-5 offset-lg-1">
        <div class="s_product_text">
          <h3>{{ $pesan->nama_barang }}</h3>
          <h2>Rp {{ number_format($pesan->harga) }}</h2>
          <li><span>Kode Barang</span>: {{ $pesan->kode }}</li><hr>
          <li><span>Harga Barang</span>:{{ $pesan->harga }}</li><hr>
          <li><span>Kategori</span>: {{ $pesan->kategori->kategori }}</li>
          <p>Keterangan: <br>{{ $pesan->keterangan }}</p>
          <form method="post" action="{{url('pesan')}}/{{$pesan->id}}" class="mb-5">
            @csrf
            <li><span>Jumlah</span>: <input type="text" name="jumlah_pesan" placeholder="Max :{{$pesan->stok}}"></li><hr>
            <div class="card_area d-flex align-items-center mb-5">
              @if (auth()->user()->level == "pembeli")
              <button type="submit" class="genric-btn warning radius">Pesan</button>
              @endif
            </div>
          </form>
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