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
          <h1>Contact</h1>
          <nav class="d-flex align-items-center">
            <a href="index.html">Home<span class="lnr lnr-arrow-right"></span></a>Contact</i>
          </nav>
        </div>
      </div>
    </div>
  </section>
  
  <!--================Contact Area =================-->
  <section class="contact_area section_gap_bottom">
    <div class="container">
      <center>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1982.6798084703607!2d106.78381877422838!3d-6.3474588996634385!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69eef0c317db91%3A0xec668f04f7d61985!2sJl.%20JCC%2027-14%2C%20Gandul%2C%20Kec.%20Cinere%2C%20Kota%20Depok%2C%20Jawa%20Barat%2016514!5e0!3m2!1sen!2sid!4v1622535330464!5m2!1sen!2sid" width="1000" height="500" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
      </center>
      <div class="row mt-5">
        <div class="col-lg-3">
          <div class="contact_info">
            <div class="info_item">
              <i class="lnr lnr-home"></i>
              <h6>Jawa Barat, Indonesia</h6>
              <p>Jln Melati III Gandul-Cinere,Depok</p>
            </div>
            <div class="info_item">
              <i class="lnr lnr-phone-handset"></i>
              <h6>083108312088</h6>
              <p>Yang Tertera Nomor Hasil Gacha</p>
            </div>
            <div class="info_item">
              <i class="lnr lnr-envelope"></i>
              <h6>keimalreyyan@gmail.com</h6>
              <p>Email Diatas Juga Hasil Gacha</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="contact_info">
            <div class="info_item">
              <img class="img-fluid" src="{{asset('image/utama.jpg')}}" alt="" width="170">
            </div>
          </div>
        </div>
        <div class="col-lg-2">
          <div class="contact_info">
            <div class="info_item">
              <img class="img-fluid" src="{{asset('image/smk1.jpg')}}" alt="" width="100">
            </div>
            <div class="info_item mt-3">
             <img class="img-fluid" src="{{asset('image/smk2.jpg')}}" alt="" width="100">
           </div>
         </div>
       </div>
       <div class="col-lg-2">
        <div class="contact_info">
          <div class="info_item">
            <img class="img-fluid" src="{{asset('image/smk1.jpg')}}" alt="" width="100">
          </div>
          <div class="info_item mt-3">
           <img class="img-fluid" src="{{asset('image/smk2.jpg')}}" alt="" width="100">
         </div>
       </div>
     </div>
     <div class="col-lg-2">
      <div class="contact_info">
        <div class="info_item">
          <img class="img-fluid" src="{{asset('image/smk1.jpg')}}" alt="" width="100">
        </div>
        <div class="info_item mt-3">
         <img class="img-fluid" src="{{asset('image/smk2.jpg')}}" alt="" width="100">
       </div>
     </div>
   </div>

 </div>
</section>
<!--================Contact Area =================-->

<!-- start footer Area -->
<footer class="footer-area section_gap">

  <!-- start footer Area -->
  <div class="mt-5">
    @include('layouts.include.footer')
  </div>
  <!-- End footer Area -->


  @include('layouts.include.js')
</body>

</html>



