 <header class="header_area sticky-header">
  <div class="main_menu">
    <nav class="navbar navbar-expand-lg navbar-light main_box">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <a class="navbar-brand logo_h" href="{{route('barang.index')}}"><img src="{{asset('image/ds.png')}}" width="130" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
        <ul class="nav navbar-nav menu_nav ml-auto">
         @if (auth()->user()->level == "admin")
         
         <li class="nav-item submenu dropdown">
          <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
          aria-expanded="false">Admin</a>
          <ul class="dropdown-menu">
            <li class="nav-item"><a class="nav-link" href="/dabar">Data Barang</a></li>
            <li class="nav-item"><a class="nav-link" href="/dasan">Data Pesanan</a></li>
          </ul>
          @endif
        </li>
        <li class="nav-item "><a class="nav-link" href="{{route('barang.index')}}">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="/shop">Shop</a></li>
        
        
        <li class="nav-item"><a class="nav-link" href="/contact">Contact</a></li>
        @if (auth()->user()->level == "pembeli")
        <li class="nav-item">
          <?php 
          $pesanan_utama = \App\Model\pesanan::where('user_id',Auth::user()->id)
          ->where('status',0)->first();
          if(!empty($pesanan_utama)) 
          {
           $notif = \App\Model\pesanan_detail::where('pesanan_id', $pesanan_utama->id)->count();  
         }
         ?>
         
         <a class="nav-link" href="{{url('check-out')}}">
          <i class="fa fa-shopping-cart"></i>
          @if(!empty($notif))
          <span class="badge badge-danger">{{ $notif }}</span>
          @endif
        </a>
      </li>
      @endif
      <li class="nav-item active submenu dropdown genric-btn danger-border small">
        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
        aria-expanded="false">{{ Auth::user()->name }}</a>
        <ul class="dropdown-menu">
          <li class="nav-item"><a class="nav-link" href="/profile">Profile</a></li>
          @if (auth()->user()->level == "pembeli")
          <li class="nav-item"><a class="nav-link" href="/history">Riwayat</a></li>
          @endif
          <li class="nav-item"><a class="nav-link" href="/logout">LogOut</a></li>
        </ul>
      </li>
    </ul>
    <ul class="nav navbar-nav navbar-right">

      <li class="nav-item">
        <button class="search"><span class="lnr lnr-magnifier" id="search"></span></button>
      </li>
    </ul>
  </div>
</div>
</nav>
</div>
<div class="search_input" id="search_input_box">
  <div class="container">
    <form class="d-flex justify-content-between" method="GET" action="/shop">
      <input name="cari" type="text" class="form-control" id="search_input" placeholder="Cari Barang">
      <button type="submit" class="btn"></button>
      <span class="lnr lnr-cross" id="close_search" title="Close Search"></span>
    </form>
  </div>
</div>
</header>