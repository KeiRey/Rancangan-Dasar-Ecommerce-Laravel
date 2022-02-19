
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
     <h1>Shop</h1>
     <nav class="d-flex align-items-center">
      <a href="index.html">Home<span class="lnr lnr-arrow-right"></span></a>Shop
    </nav>
  </div>
</div>
</div>
</section>
<!-- End Banner Area -->
<div class="container">
  <div class="row">
   <div class="col-xl-12 col-lg-12 col-md-12">
    <!-- Start Filter Bar -->
    <div class="filter-bar d-flex flex-wrap align-items-center">
    </div>
    <!-- End Filter Bar -->
    @if(session('succes'))
    <div class="alert alert-success mt-3" role="alert">
     {{session('succes')}}
   </div>
   @endif
   <!-- Start Best Seller -->
   <section class="lattest-product-area pb-40 category-list">
     <div class="row">
      @foreach($data as $shop)
      <!-- single product -->
      <div class="col-lg-3 col-md-6">
       <div class="single-product">
        <img class="img-fluid" src="{{url('images')}}/{{$shop->gambar}}" width="100" alt="">
        <div class="product-details">
         <h6 class="text-warning">{{$shop->nama_barang}}</h6>
         <div class=" price">
          <h6>Harga :</h6>
          <h6>Rp. {{number_format($shop->harga)}}</h6><br>
          <h6>Stok :</h6>
          <h6>{{$shop->stok}}</h6><br>
          <h6>Kategori :</h6>
          <h6>{{$shop->kategori->kategori}}</h6>
        </div>
        <div class="prd-bottom">
          @if (auth()->user()->level == "pembeli")
          <a href="/pesan/{{$shop->id}}" class="social-info">
           <span class="ti-bag"></span>
           <p class="hover-text">Pesan</p>
         </a>
         @endif
         <a href="{{route('barang.show',$shop->id)}}" class="social-info">
           <span class="lnr lnr-move"></span>
           <p class="hover-text">Detail</p>
         </a>
       </div>
     </div>
   </div>
 </div>
 <!-- single product -->
 @endforeach
</div>
</section>

<div class="filter-bar d-flex flex-wrap align-items-center mb-5">
 <!-- End Filter Bar -->
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