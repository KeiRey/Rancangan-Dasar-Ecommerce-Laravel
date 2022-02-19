<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
  <!-- Mobile Specific Meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Favicon-->
  <link rel="shortcut icon" href="{{asset('image/logo.png')}}">
  <!-- Author Meta -->
  <meta name="author" content="CodePixar">
  <!-- Meta Description -->
  <meta name="description" content="">
  <!-- Meta Keyword -->
  <meta name="keywords" content="">
  <!-- meta character set -->
  <meta charset="UTF-8">
  <!-- Site Title -->
  <title>Login Account</title>

  <!--
    CSS
    ============================================= -->
    <link rel="stylesheet" href="{{asset('admin/assets/css/linearicons.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/css/nouislider.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/css/main.css')}}">
  </head>

  <body>
    <!--================Login Box Area =================-->
    <center>
      <section class="login_box_area section_gap">
        <div class="container">
          <div class="col-md-6">
            <div class="login_form_inner">
              <h3>Buat Akun</h3>
              <form class="row login_form" action="{{ route('simpanregistrasi') }}" method="POST" id="contactForm" novalidate="novalidate">
                @csrf
                <div class="col-md-12 form-group">
                  <input type="text" class="form-control" id="nama" name="name" placeholder="Nama Lengkap" autocomplete="off" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nama Lengkap'">
                </div>
                <div class="col-md-12 form-group">
                  <input type="email" class="form-control" id="email" name="email" placeholder="Emal" autocomplete="off" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email'">
                </div>
                <div class="col-md-12 form-group">
                  <input type="password" class="form-control" id="name" name="password" placeholder="Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'">
                </div>
                <div class="col-md-12 form-group mt-4">
                  <button type="submit" value="submit" class="primary-btn">Log In</button>
                </div>
                <div class="col-md-6 mt-3 mb-3">
                  <a href="{{ route('login') }}"><-Kembali</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
  </center>
  <!--================End Login Box Area =================-->

  <!-- start footer Area -->
  @include('layouts.include.footer')
  <!-- End footer Area -->


  @include('layouts.include.js')
</body>
</html>