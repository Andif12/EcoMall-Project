@extends('layout.main')
@section('title', 'Kategori Produk')
@section('content')
<link rel="stylesheet" href="{{asset('mall/css/kategori.css')}}">
@include('includes.header-login')
<div class="product-from-home">
        <a href="{{ url('homeShop') }}">Home</a> / Pilihan Produk
    </div>
    <div class="product-menu">
    <a href="{{ route('homeShop') }}" class="{{ request()->is('rekomendasi') ? 'active' : '' }}">Rekomendasi</a>
    <a href="{{ route('homeShop') }}" class="{{ request()->is('flash-sale') ? 'active' : '' }}">Diskon Spesial</a>
    <a href="{{ route('category.show', 3) }}" class="{{ request()->is('category/3') ? 'active' : '' }}">Perawatan Diri & Kecantikan</a>
    <a href="{{ route('category.show', 1) }}" class="{{ request()->is('category/1') ? 'active' : '' }}">Pakaian & Aksesoris</a>
    <a href="{{ route('category.show', 2) }}" class="{{ request()->is('category/2') ? 'active' : '' }}">Peralatan Rumah Tangga</a>
    <a href="{{ route('category.show', 4) }}" class="{{ request()->is('category/4') ? 'active' : '' }}">Elektronik dan Gadget</a>
    <a href="{{ route('category.show', 6) }}" class="{{ request()->is('category/5') ? 'active' : '' }}">Kantor dan Sekolah</a>
    <a href="{{ route('category.show', 6) }}" class="{{ request()->is('category/6') ? 'active' : '' }}">Olahraga dan Aktivitas Luar Ruangan</a>
    <a href="{{ route('category.show', 7) }}" class="{{ request()->is('category/7') ? 'active' : '' }}">Makanan dan Minuman</a>
    <a href="{{ route('category.show', 8) }}" class="{{ request()->is('category/8') ? 'active' : '' }}">Berkebun dan Pertanian</a>
    <a href="{{ route('category.show', 9) }}" class="{{ request()->is('category/9') ? 'active' : '' }}">Produk Anak-Anak</a>
    <a href="{{ route('category.show', 10) }}" class="{{ request()->is('category/10') ? 'active' : '' }}">Transportasi dan Mobilitas</a>
</div>

<script src="{{asset('mall/js/kategori.js')}}"></script>
@include('partials.product-list', ['products' => $products])
@endsection