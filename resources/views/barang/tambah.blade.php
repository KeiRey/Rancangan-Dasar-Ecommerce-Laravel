@extends('layouts.app')

@section('content')

<div class="main-panel">
  <div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title"> Data Barang </h3>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{route('barang.index')}}">Yuk Beli</a></li>
          <li class="breadcrumb-item active" aria-current="page">Tambah Barang</li>
        </ol>
      </nav>
    </div>
    <div class="row">
      <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Isi Form Penambahan</h4>
          </div>
          <div class="card-body">
            <form class="forms-sample" method="POST" action="{{route('barang.store')}}">
              @csrf
              <div class="form-group">
                <label for="exampleInputName1">Nama Barang</label>
                <input type="text" class="form-control" id="exampleInputName1" placeholder="Nama Barang" name="nama_barang">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail3">Kode Barang</label>
                <input type="number" class="form-control" id="exampleInputEmail3" placeholder="Kode Barang" name="kode">
              </div>
              <div class="form-group">
                <label>Masukan Gambar</label>
                <input type="file" name="img[]" class="file-upload-default">
                <div class="input-group col-xs-12">
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" id="inputGroupFile02" name="gambar">
                    <label class="custom-file-label" for="inputGroupFile02">Choose file</label>
                  </div>         
                </div>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail3">Harga</label>
                <input type="number" class="form-control" id="exampleInputEmail3" placeholder="Harga Barang" name="harga">
              </div>
              <div class="form-group">
                <label for="exampleInputName1">Keteranagan</label>
                <input type="text" class="form-control" id="exampleInputName1" placeholder="Keterangan" name="keterangan">
              </div>
              <div class="row">
                <div class="col-md-6 mt-4">  
                  <button class="btn btn-light">
                    <a href="{{route('barang.index')}}">Kembali</a>
                  </button>
                </div>  
                <div class="col-md-6 mt-4">
                  <button type="submit" class="btn btn-gradient-primary mr-2 float-right">
                    Tambah
                  </button>
                </div>
              </div>
            </form>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>
@stop