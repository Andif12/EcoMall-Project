<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet" />
    <!-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet"> -->
    <title>@yield('title')</title>
    <link rel="shortcut icon" href="{{ asset('mall/img/logoo.png') }}">
    <!-- <link rel="stylesheet" href="{{ asset('css/Home_shop.css') }}"> -->
</head>
<body>
    <!-- @if (Request::is('/'))
        @include('includes.header-awal')
    @elseif (Request::is('home-shop'))
        @include('includes.header-shop')
    @elseif (Request::is('login-shop') || Auth::check())
        @include('includes.header-login')
    @endif -->

    <div class="content">
        @yield('content')
    </div>

    @include('includes.footer')
    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script> -->
    <!-- <script src="{{ asset('js/home_shop.js') }}"></script> -->
</body>
</html>
