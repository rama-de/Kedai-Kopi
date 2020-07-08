@extends('layouts/lay2')

@section('header')

@section('title', 'Kedai Kopi Kulo')

@section('nav')

@section('slideshow')

@section('panel')

@section('konten')
<h2 class="mt-5 text-tunggal" align="center"> Produk Kami</h2>

<div class="row justify-content-center mt-3">
<div class="col-lg-6">
<form>
  <div class="input-group mb-3">
  <input type="text" name="cari" class="form-control" autocomplete="off" placeholder="Cari Kopi Favoritmu disini..." aria-describedby="button-addon2">
  <div class="input-group-append">
    <button class="btn btn-outline-secondary cari" type="button" id="button-addon2">Cari</button>
  </div>
</div>
</form>
</div>
</div>

<div class="row d-flex justify-content-center">
<div class="col-lg-12">
  <div class="row">
@foreach ($produk as $p)
	<div class="col-lg-3">
   		<div class="card mt-3">
   			<img class="card-img-top" src="{{ url('public/storage/files/ . $p->gambar')}}" alt="Card image cap">
     		<div class="card-body">
  			<h5 class="card-title text-tunggal">{{$p->nama}}</h5>
  			<h6 class="card-subtitle mb-2 text-muted text-tunggal">{{$p->harga}}</h6>
  			<a href="/produk/detail/{{$p->id}}" class="tombol float-right"> Lihat </a>
		</div>
	</div>
</div>
@endforeach
</div>
</div>
</div>
<!-- Akhir Row -->


<h2 class="mt-5 text-tunggal" align="center"> Tentang Kami</h2>
<div class="row">
	<div class="col-lg-6 gambarproduk">
		<img src="{{url('img/kopi2.svg')}}">
	</div>
	<div class="col-lg-6">
		<div class="produk">
			<h4>Keterangan Produk</h4>
		</div>
	</div>
</div>
</div>
<!--  Akhir Container -->

@endsection

@section('copyright');

@section('footer')