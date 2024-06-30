@extends('layout.main')

@section('title', 'Shop')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('mall/css/Home_shop.css') }}">
    <link rel="stylesheet" href="{{ asset('mall/css/akun.css') }}">
    @if (Auth::check())
        @include('includes.header-login')
    @else
        @include('includes.header-shop')
    @endif
</head>
<body>
<div class="promo">
    <img src="{{ asset($promoProduct->imagePath) }}" alt="Promosi">
    <a href="{{ route('flashSaleProduct.show', $promoProduct->id) }}" class="promo-link">
        <div class="promo-text">Diskon {{ number_format((($promoProduct->price - $promoProduct->discount_price) / $promoProduct->price) * 100, 0) }}%</div>
    </a>
</div>
<section class="categories">
    @include('partials.category-menu')
</section>

<section class="flash-sale">
    <div class="container">
        <h2><span class="first-letter">F</span><img class="icon" src="{{ asset('mall/vectors/EcoMall_hijau_tua.svg') }}" alt="Icon">ASH SALE</h2>
        <div class="product-carousel">
            <ul class="product-list">
                @if($flashSaleProducts)
                    @foreach($flashSaleProducts as $product)
                    <li class="product-flash-sale">
                        <div class="product-image">
                            <a href="{{ route('product.show', $product->id) }}">
                                <img src="{{ asset($product->imagePath) }}" alt="{{ $product->name }}">
                            </a>
                        </div>
                        <div class="product-info">
                            <h3>{{ $product->name }}</h3>
                            <p class="price">Rp.{{ $product->price }}</p>
                            <p class="discount-price">Rp.{{ $product->discount_price }}</p>
                        </div>
                    </li>
                    @endforeach
                @endif
            </ul>
            <div class="carousel-controls">
                <button class="prev">&#10094;</button>
                <button class="next">&#10095;</button>
            </div>
        </div>
    </div>
</section>

<section class="Rekomendasi">
    <h2>REKOMENDASI</h2>
    <div class="Rekomendasi-product">
        @if($recommendedProducts)
            @foreach($recommendedProducts as $product)
            <div class="product">
                <a href="{{ route('product.show', $product->id) }}">
                    <img src="{{ asset('mall/img/Produk/' . $product->category->name . '/' . $product->details->image) }}" alt="{{ $product->name }}" class="product-image">
                    <div class="product-details">
                        <h3 class="product-name">{{ $product->name }}</h3>
                        <p class="store-name">{{ $product->details->store_name }}</p>
                        <div class="rating">
                            <div class="rating-stars">
                                @for ($i = 0; $i < 5; $i++)
                                    @if ($i < floor($product->details->rating_value))
                                        <img src="{{ asset('mall/vectors/star.svg') }}" alt="Rating Star">
                                    @elseif ($i < ceil($product->details->rating_value))
                                        <img src="{{ asset('mall/vectors/star-half.svg') }}" alt="Rating Star">
                                    @else
                                        <img src="{{ asset('mall/vectors/star-empty.svg') }}" alt="Rating Star">
                                    @endif
                                @endfor
                            </div>
                            <span class="rating-value">{{ $product->details->rating_value }}</span>
                            <span class="rating-count">({{ $product->details->rating_count }})</span>
                        </div>
                        <div class="prices">
                            <p class="current-price">Rp{{ $product->price }}</p>
                            @if($product->details->discount)
                            <p class="regular-price">Rp{{ $product->details->price_before_discount }}</p>
                            <p class="discount">Diskon {{ $product->details->discount }}%</p>
                            @endif
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        @endif
    </div>
</section>
</body>
<script src="{{ asset('mall/js/Home_shop.js') }}"></script>
</html>

@endsection
