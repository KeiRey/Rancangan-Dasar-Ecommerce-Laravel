
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
        <h1>Data Pesanan</h1>
        <nav class="d-flex align-items-center">
          <p>Admin <span class="lnr lnr-arrow-right"></span></p> Data Pesanan
        </nav>
      </div>
    </div>
  </div>
</section>


<div class="container">
  <div class="row">
   <div class="col-xl-12 col-lg-12 col-md-12">

    <a href="/shop" class="btn btn-warning mb-3">Kembali</a>
    <a href="/dasan/export" class="btn btn-info mb-3 align-items-right">Export Pdf</a>
    <table class="table table-hover">
     <thead>
      <th>No</th>
      <th>Pemesan</th>
      <th>Tanggal Pesan</th>
      <th>Status</th>
      <th>Kode</th>
      <th>Jumlah Harga</th>
    </thead>
    <tbody>
      @foreach($dasan as $no => $data)
      
      <tr>
       <td>{{ $no+1 }}</td>
       <td>{{ $data->user->name}}</td>
       <td>{{ $data->tanggal }}</td>
       <td>

         @if($data->status == 2)
         <button type="" class="btn-sm btn-warning">Sudah Bayar</button>
         @elseif($data->status == 1)
         <form method="POST" action="/dasan/status/{{$data->id}}">
          @csrf
          @method('put')
          <input type="hidden" name="status" value="2">
          <button type="submit" class="btn-sm btn-info">Belum Bayar</button>
        </form>
        @endif
      </td>
      <td>{{ $data->kode }}</td>
      <td>Rp. {{ number_format($data->jumlah_harga) }}</td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
</div>
</div>
<!-- start footer Area -->
<div class="mt-5">
  @include('layouts.include.footer')
</div>
<!-- End footer Area -->

@include('layouts.include.js')
</body>

</html>



