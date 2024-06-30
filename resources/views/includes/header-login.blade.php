<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet" />
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('mall/css/Home_shop.css') }}">
</head>
<body>
<header>
    <a href="{{ route('home') }}" class="logo">
        <img class="icon" src="{{ asset('mall/vectors/EcoMall_hijau_tua.svg') }}" alt="Logo">EcoMall
    </a>
    <div class="search-bar">
        <input type="text" placeholder="Cari.." name="Cari">
        <button type="submit"><i class="fas fa-search"></i></button>
    </div>
    <div class="ikon">
    <a href="/cart"><i class="fas fa-shopping-cart"></i></a>
    <a href="/messages"><i class="fas fa-comment-alt"></i></a>
    <a href="/favorites"><i class="fas fa-heart"></i></a>
    <div class="profile">
        @if(Auth::check() && Auth::user()->profile_picture)
            <a href="/profile"><img src="{{ asset(Auth::user()->profile_picture) }}" alt="Profile Picture"></a>
        @else
            <a href="/profile"><img src="{{ asset('mall/img/Pengguna/avatar.JPG') }}" alt="Default Profile Picture"></a>
        @endif
    </div>
</div>
</header>
<script>
// document.addEventListener('DOMContentLoaded', (event) => {
//     const cartIcon = document.querySelector('.fas.fa-shopping-cart');
//     cartIcon.addEventListener('click', () => {
//         let cartValue = parseInt(cartIcon.getAttribute('data-cart-value')) || 0;
//         cartValue += 1;
//         cartIcon.setAttribute('data-cart-value', cartValue);
//         alert(`Item added to cart. Total items: ${cartValue}`);
//     });
// });
</script>
</body>
</html>
