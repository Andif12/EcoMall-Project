@extends('layout.main')

@section('title', 'Login')

@section('content')
<div class="container">
    <link rel="stylesheet" href="{{ asset('mall/css/Home_shop.css') }}">
    <link rel="stylesheet" href="{{ asset('mall/css/loginPage.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;800&display=swap" />
    @php
    $imagebg = asset('mall/img/lingkungan hijau.jpg');
    $vectorImage = asset('mall/vectors/logo ecomall.svg');
    @endphp
    <style>
        .main-container {
            background: url("{{ $imagebg }}") no-repeat center center;
            background-size: cover;
        }
        .vector {
            background: url("{{ $vectorImage }}") no-repeat center;
            background-size: 100% 100%;
        }
        a{
            display: none;
        }
    </style>
    @include('includes.header-awal')
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="main-container">
            <div class="rectangle">
                <div class="frame">
                    <div class="vector"></div>
                    <span class="brand-name">EcoMall</span>
                </div>
                <div class="rectangle-1">
                    <input type="text" name="login" id="login" required placeholder="Email or Username">
                </div>
                <div class="rectangle-2">
                    <input type="password" name="password" id="password" placeholder="Password" required>
                </div>
                <button type="submit" class="rectangle-3">
                    <span class="login">Login</span>
                </button>
                <a href="{{ route('register') }}" class="buat-akun">Buat Akun</a>
                <div class="frame-4"></div>
                <a href="{{ route('password.request') }}" class="forgot-password">Forgot Password?</a>
            </div>
        </div>
    </form>

    @if($errors->has('login'))
        <div>
            <strong>{{ $errors->first('login') }}</strong>
        </div>
    @endif
</div>
@endsection
