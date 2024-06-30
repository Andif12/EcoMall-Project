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
            <input type="text" placeholder="Search.." name="Search">
            <button type="submit"><i class="fas fa-search"></i></button>
        </div>
        <button type="button" class="login-button" onclick="window.location.href='login'">Login</button>
    </header>
    <script src="{{ asset('mall/js/home_shop.js') }}"></script>
</body>
</html>
