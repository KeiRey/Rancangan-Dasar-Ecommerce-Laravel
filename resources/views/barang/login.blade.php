<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
  <!-- Mobile Specific Meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Favicon-->
  <link rel="shortcut icon" href="{{asset('image/ds.png')}}">
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
    <section class="login_box_area section_gap">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <div class="login_box_img">
              <img class="img-fluid" src="{{asset('image/login.png')}}" width="100" alt="">
              <div class="hover">
                <h4>Males Keluar Rumah Buat Belanja?</h4>
                <p>Yuk Kunjungi Koperasi Kami</p>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="login_form_inner">
              <h3>Log In</h3>
              @if(session('success'))
              <div class="alert alert-success">
                {{ session('success') }}
              </div>
              @endif
              @if(session('warning'))
              <div class="alert alert-warning">
                {{ session('warning') }}
              </div>
              @endif

              <form class="row login_form" action="/postlogin" method="post" id="contactForm" novalidate="novalidate">
                @csrf
                <div class="col-md-12 form-group">
                  <input type="text" class="form-control" id="name" name="email" placeholder="Email" autocomplete="off" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email'">
                </div>
                <div class="col-md-12 form-group">
                  <input type="password" class="form-control" id="name" name="password" placeholder="Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'">
                </div>
                <div class="col-md-12 form-group mt-2">
                  <button type="submit" value="submit" class="primary-btn">Log In</button>
                </div>
                <div class="col-md-6 form-group ">
                  <a href="{{ route('fblogin') }}" type="submit" class="genric-btn info">Login Facebook</a>
                </div>
                <div class="col-md-6 form-group ">
                  <a href="{{ route('gologin') }}" type="submit" class="genric-btn danger">Login Google</a>
                </div>
                <div class="col-md-12 mt-3">
                  <a href="{{ route('registrasi') }}">Buat Akun</a>
                </div>
               <!--  <div class="col-md-6 mt-5">
                  <a href="#">Lupa Password?</a>
                </div> -->
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================End Login Box Area =================-->

    <!-- start footer Area -->
    @include('layouts.include.footer')
    <!-- End footer Area -->


    @include('layouts.include.js')
  </body>

  </html>