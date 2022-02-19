@extends('layouts.app')
@section('content')

@foreach($barang as $item)
<div class="col-lg-3 col-md-6">
  <div class="single-product">
    <img src="{{url('images')}}/{{$item->gambar}}" width="300" class="rounded mx-auto d-block">
    <div class="product-details">
      <h6 class="text-warning">{{$item->nama_barang}}</h6>
      <div class="price">
        <p>Harga:  Rp. {{number_format($item->harga)}}</p>
      </div>
      <div class="prd-bottom">
        @if (auth()->user()->level == "pembeli")
        <div class="card_area d-flex align-items-center mb-5">
         <a href="/shop" class="genric-btn danger radius">Pesan</a>
       </div>
       @endif
     </div>
   </div>
 </div>
</div>
@endforeach
<div class="col-md-12">
  Tampilan
  {{ $barang->firstItem() }}
  Sampai
  {{ $barang->lastItem() }}
  Item, dari
  {{ $barang->total() }}
  total barang
</div>
<div class="col-md-6">
 {{$barang->links()}}
</div>
@stop
