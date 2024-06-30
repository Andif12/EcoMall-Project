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
        <div class="visi-shop-home">
            <button type="button" class="vision" onclick="window.location.href='/ourVision'">Our Vision</button>
            <button type="button" class="home-shop" onclick="window.location.href='/homeShop'">Shop</button>
        </div>
    </header>
    <script src="{{ asset('mall/js/home_shop.js') }}"></script>
</body>
</html>
