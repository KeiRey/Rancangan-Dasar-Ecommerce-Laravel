<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
 @include('layouts.include.css')
</head>

<body>

  <!-- Start Header Area -->
  @include('layouts.include.navbar')
  <!-- End Header Area -->

  <!-- start banner Area -->
  @include('layouts.include.sidebar')
  <!-- End banner Area -->

  <!-- start features Area -->
  <section class="features-area section_gap">
    <div class="container">
      <div class="row features-inner">
        <!-- single features -->
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="single-features">
            <div class="f-icon">
              <img src="{{asset('admin/assets/img/features/f-icon1.png')}}" alt="">
            </div>
            <h6>Gratis Ongkir</h6>
            <p>Untuk Daerah Depok</p>
          </div>
        </div>
        <!-- single features -->
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="single-features">
            <div class="f-icon">
              <img src="{{asset('admin/assets/img/features/f-icon2.png')}}" alt="">
            </div>
            <h6>Barang Bisa DiKembalikan</h6>
            <p>Selama Masih Dalam Satu Hari</p>
          </div>
        </div>
        <!-- single features -->
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="single-features">
            <div class="f-icon">
              <img src="{{asset('admin/assets/img/features/f-icon3.png')}}" alt="">
            </div>
            <h6>Kontak Selalu Aktif</h6>
            <p>Pada Jam Kerja</p>
          </div>
        </div>
        <!-- single features -->
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="single-features">
            <div class="f-icon">
              <img src="{{asset('admin/assets/img/features/f-icon4.png')}}" alt="">
            </div>
            <h6>Harga Merakyat</h6>
            <p>Kualitas Tinggi Harga Rakyat</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end features Area -->
  <!-- start product Area -->
  <section>
    <!-- single product slide -->
    <div class="single-product">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6 text-center">
            <div class="section-title">
              <h1>Our Products</h1>
              <p>Amanah | Aman | Terpercaya</p>
            </div>
          </div>
        </div>
        <div class="row">
          @yield('content')
        </div>
      </div>
    </div>
    <!-- single product slide -->
  <!--   <div class="single-product-slider">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6 text-center">
            <div class="section-title">
              <h1>Coming Products</h1>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                dolore
                magna aliqua.</p>
            </div>
          </div>
        </div>
      </div>
    </div> -->
  </section>
  <!-- end product Area -->

  @include('layouts.include.footer')

  <!-- End footer Area -->
  @include('layouts.include.js')
</body>
</html>