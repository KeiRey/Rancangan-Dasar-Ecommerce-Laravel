
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
     <h1>Profile</h1>
     <nav class="d-flex align-items-center">
      <a href="index.html">Profile<span class="lnr lnr-arrow-right"></span></a><i class="fa fa-user"></i>
    </nav>
  </div>
</div>
</div>
</section>


<div class="container">
  <div class="row">
   <div class="col-xl-12 col-lg-12 col-md-12">
    @if(session('succes'))
    <div class="alert alert-success mt-3" role="alert">
     {{session('succes')}}
   </div>
   @endif
   @if(session('gagal'))
   <div class="alert alert-danger mt-3" role="alert">
     {{session('gagal')}}
   </div>
   @endif
   <a href="/shop" class="genric-btn danger radius">Kembali</a><br>
   <div class="card mt-3">
     <div class="card-body">
      <h4><i class="fa fa-user"></i> My Profile</h4>
      <table class="table mt-3">
       <tbody>
        <tr>
         <td>Nama</td>
         <td width="10">:</td>
         <td>{{ $user->name }}</td>
       </tr>
       <tr>
         <td>Email</td>
         <td>:</td>
         <td>{{ $user->email }}</td>
       </tr>
       <tr>
         <td>No Telepon</td>
         <td>:</td>
         <td>{{ $user->notelp }}</td>
       </tr>
       <tr>
         <td>Alamat</td>
         <td>:</td>
         <td>{{ $user->alamat }}</td>
       </tr>
     </tbody>
   </table>
 </div>
</div>
<div class="card mt-3">
 <div class="card-body">
  <h4><i class="fa fa-pencil-alt"></i> Edit</h4>
  <form method="POST" action="{{ url('profile') }}">
   @csrf

   <div class="form-group row">
    <label for="name" class="col-md-2 col-form-label text-md-right">Nama</label>

    <div class="col-md-6">
     <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $user->name }}" required autocomplete="name" autofocus>

     @error('name')
     <span class="invalid-feedback" role="alert">
      <strong>{{ $message }}</strong>
    </span>
    @enderror
  </div>
</div>

<div class="form-group row">
  <label for="email" class="col-md-2 col-form-label text-md-right">Email</label>

  <div class="col-md-6">
   <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user->email }}" required autocomplete="email">

   @error('email')
   <span class="invalid-feedback" role="alert">
    <strong>{{ $message }}</strong>
  </span>
  @enderror
</div>
</div>

<div class="form-group row">
  <label for="notelp" class="col-md-2 col-form-label text-md-right">No Telepon</label>
  <div class="col-md-6">
   <input id="notelp" type="text" class="form-control @error('notelp') is-invalid @enderror" name="notelp" value="{{ $user->notelp }}" required autocomplete="notelp" autofocus>

   @error('notelp')
   <span class="invalid-feedback" role="alert">
    <strong>{{ $message }}</strong>
  </span>
  @enderror
</div>
</div>

<div class="form-group row">
  <label for="alamat" class="col-md-2 col-form-label text-md-right">Alamat</label>
  <div class="col-md-6">
   <textarea for="alamat" name="alamat" class="form-control @error('alamat') is-invalid @enderror" required="">{{ $user->alamat }}</textarea>

   @error('alamat')
   <span class="invalid-feedback" role="alert">
    <strong>{{ $message }}</strong>
  </span>
  @enderror
</div>
</div>

<div class="form-group row">
  <label for="password" class="col-md-2 col-form-label text-md-right">{{ __('Password') }}</label>
  <div class="col-md-6">
   <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"  autocomplete="new-password">

   @error('password')
   <span class="invalid-feedback" role="alert">
    <strong>{{ $message }}</strong>
  </span>
  @enderror
</div>
</div>

<div class="form-group row">
  <label for="password-confirm" class="col-md-2 col-form-label text-md-right">{{ __('Confirm Password') }}</label>
  <div class="col-md-6">
   <input id="password-confirm" type="password" class="form-control" name="password_confirmation"  autocomplete="new-password">
 </div>
</div>

<div class="form-group row mb-0">
  <div class="col-md-6 offset-md-2">
   <button type="submit" class="btn btn-primary">
    <i class="fa fa-pencil-alt"></i> Edit
  </button>
</div>
</div>
</form>
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
<!-- End footer Area -->

@include('layouts.include.js')
</body>

</html>



