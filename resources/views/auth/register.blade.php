@extends('layout.main')

@section('title', 'Register')

@section('content')
<body>
<div class="container">
<!-- <link rel="stylesheet" href="{{ asset('mall/css/register.css') }}">
    <link rel="stylesheet" href="{{ asset('mall/css/Home_shop.css') }}"> -->
    @php
    $imagebg = asset('mall/img/lingkungan hijau.jpg');
    @endphp
    <style>
        .main-container {
            background: url("{{ $imagebg }}") no-repeat center center;
            background-size: cover;
        }
    </style>
    @include('includes.header-awal')
    <div class="main-container">
        <div class="rectangle">
            <h1 class="register-title">Register</h1>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="form-group">
                    <input type="text" name="name" id="name" class="form-control" placeholder="Nama Lengkap" value="{{ old('name') }}" required>
                </div>
                <div class="form-group">
                    <input type="text" name="username" id="username" class="form-control" placeholder="Username" value="{{ old('username') }}" required>
                </div>
                <div class="form-group">
                    <input type="text" name="birth_place" id="birth_place" class="form-control" placeholder="Tempat Lahir" value="{{ old('birth_place') }}" required>
                </div>
                <div class="form-group">
                    <input type="date" name="birth_date" id="birth_date" class="form-control" value="{{ old('birth_date') }}" required>
                </div>
                <div class="form-group">
                    <select name="gender" id="gender" class="form-control" required>
                        <option value="" disabled selected>Jenis Kelamin</option>
                        <option value="male">Laki-Laki</option>
                        <option value="female">Perempuan</option>
                    </select>
                </div>
                <div class="form-group">
                    <input type="email" name="email" id="email" class="form-control" placeholder="Email" value="{{ old('email') }}" required>
                </div>
                <div class="form-group">
                    <input type="text" name="phone" id="phone" class="form-control" placeholder="No Telp" value="{{ old('phone') }}" required>
                </div>
                <div class="form-group">
                    <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
                </div>
                <div class="form-group">
                    <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="Konfirmasi Password" required>
                </div>
                <button type="submit" class="btn btn-primary">Register</button>
            </form>
        </div>
    </div>
</div>
</body>
@endsection
