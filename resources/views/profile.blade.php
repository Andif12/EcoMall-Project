@extends('layout.main')

@section('title', 'Akun')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/akun.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('mall/css/akun.css') }}">
</head>
<body>
    @include('includes.header-login')
    <div class="product-from-home">
        <a href="{{ url('homeShop') }}">Home</a> / Akun Saya
    </div>
    <div class="konten-akun">
        <div class="sidebar">
            <h2 class="Akun-set">Kelola Akun Saya</h2>
            <a href="#profil" class="nav-link active" data-section="profil">Profil</a>
            <a href="#alamat" class="nav-link" data-section="rincian-alamat">Rincian Alamat</a>
            <a href="#pembayaran" class="nav-link" data-section="pilihan-pembayaran">Pilihan Pembayaran</a>
            <a href="#daftar-sebagai-penjual" class="nav-link" data-section="daftar-sebagai-penjual">Daftar Sebagai Penjual</a>
            <h2 class="Akun-set">Pesanan Saya</h2>
            <a href="#perjalanan" class="nav-link" data-section="dalam-perjalanan">Dalam Perjalanan</a>
            <a href="#pengembalian" class="nav-link" data-section="pengembalian">Pengembalian</a>
            <a href="#pembatalan" class="nav-link" data-section="pembatalan">Pembatalan</a>
            <h2 class="Akun-set">
                <form id="logout-form" method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="logout-button">Logout</button>
                </form>
            </h2>
        </div>

        <div class="main-content">
            <div class="greeting">
            Selamat Datang! <span id="user-name">{{ Auth::user()->name }}</span>
            </div>        
            <div id="profil" class="form-section">
                    <h2>Edit Profil</h2>
                    <form id="profile-form" method="POST" action="{{ route('profile.update') }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group profile-picture">
                            <label for="profile-picture">Foto Profil</label>
                            <div class="profile-picture-container">
                                <img id="profile-picture-preview" src="{{ Auth::user()->profile_picture ? asset(Auth::user()->profile_picture) : asset('img/default-avatar.png') }}" alt="Profile Picture">
                                <input type="file" id="profile-picture" name="profile_picture" accept="image/*">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="full-name">Nama Lengkap</label>
                            <input type="text" id="full-name" name="name" value="{{ Auth::user()->name }}">
                        </div>
                        <div class="form-group">
                            <label for="username">Nama Pengguna</label>
                            <input type="text" id="username" name="username" value="{{ Auth::user()->username }}">
                        </div>
                        <div class="form-group">
                            <label for="birth-place">Tempat Lahir</label>
                            <input type="text" id="birth-place" name="birth_place" value="{{ old('birth_place', Auth::user()->birth_place) }}">
                        </div>
                        <div class="form-group">
                            <label for="birth-date">Tanggal Lahir</label>
                            <input type="date" id="birth-date" name="birth_date" value="{{ old('birth_date', Auth::user()->birth_date) }}">
                        </div>
                        <div class="form-group">
                            <label for="gender">Jenis Kelamin</label>
                            <select id="gender" name="gender">
                                <option value="male" {{ Auth::user()->gender == 'male' ? 'selected' : '' }}>Laki-laki</option>
                                <option value="female" {{ Auth::user()->gender == 'female' ? 'selected' : '' }}>Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" value="{{ Auth::user()->email }}">
                        </div>
                        <div class="form-group">
                            <label for="phone">No. Telpon</label>
                            <input type="text" id="phone" name="phone" value="{{ Auth::user()->phone }}">
                        </div>
                        <div class="form-group">
                            <label for="current-password">Current Password</label>
                            <input type="password" id="current-password" name="current_password">
                        </div>
                        <div class="form-group">
                            <label for="new-password">New Password</label>
                            <input type="password" id="new-password" name="new_password">
                        </div>
                        <div class="form-group">
                            <label for="confirm-password">Confirm New Password</label>
                            <input type="password" id="confirm-password" name="confirm_password">
                        </div>
                        <div class="form-actions">
                            <button type="button" class="cancel">Cancel</button>
                            <button type="submit">Save Changes</button>
                        </div>
                    </form>
                </div>

                <div id="alamat" class="form-section">
                <h2>Rincian Alamat</h2>
                <form method="POST" action="{{ route('profile.address', Auth::user()->id) }}">
                    @csrf
                    <div class="form-group">
                        <label for="address">Alamat Lengkap</label>
                        <input type="text" id="address" name="address" value="{{ Auth::user()->address ? Auth::user()->address->address : '' }}">
                    </div>
                    <div class="form-group">
                        <label for="city">Kota</label>
                        <input type="text" id="city" name="city" value="{{ Auth::user()->address ? Auth::user()->address->city : '' }}">
                    </div>
                    <div class="form-group">
                        <label for="province">Provinsi</label>
                        <input type="text" id="province" name="province" value="{{ Auth::user()->address ? Auth::user()->address->province : '' }}">
                    </div>
                    <div class="form-group">
                        <label for="postal_code">Kode Pos</label>
                        <input type="text" id="postal_code" name="postal_code" value="{{ Auth::user()->address ? Auth::user()->address->postal_code : '' }}">
                    </div>
                    <div class="form-actions">
                        <button type="submit">Simpan</button>
                    </div>
                </form>
            </div>

         
            <div id="pembayaran" class="form-section">
    <h2>Pilihan Pembayaran</h2>
    <form action="{{ route('payments') }}" method="POST">
        @csrf
        <input type="hidden" name="order_id" value="{{ $orderId ?? '' }}">
        <div class="form-group">
            <label for="metode-pembayaran">Metode Pembayaran</label>
            <select id="metode-pembayaran" name="payment_method" onchange="toggleMetodePembayaran()">
                <option value="kartu-kredit">Kartu Kredit</option>
                <option value="paypal">PayPal</option>
                <option value="transfer-bank">Transfer Bank</option>
                <option value="kode-pembayaran">Kode Pembayaran</option>
            </select>
        </div>

        <div id="info-kartu-kredit" class="info-pembayaran">
            <div class="form-group">
                <label for="nomor-kartu">Nomor Kartu</label>
                <input type="text" id="nomor-kartu" name="nomor_kartu" placeholder="1234 5678 9012 3456">
            </div>
            <div class="form-group">
                <label for="nama-kartu">Nama pada Kartu</label>
                <input type="text" id="nama-kartu" name="nama_kartu" placeholder="Nama Lengkap">
            </div>
            <div class="form-group">
                <label for="tanggal-kadaluarsa">Tanggal Kadaluarsa</label>
                <input type="month" id="tanggal-kadaluarsa" name="tanggal_kadaluarsa">
            </div>
            <div class="form-group">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" placeholder="123">
            </div>
        </div>

        <div id="info-paypal" class="info-pembayaran" style="display: none;">
            <div class="form-group">
                <label for="email-paypal">Email PayPal</label>
                <input type="email" id="email-paypal" name="email_paypal" placeholder="email@example.com">
            </div>
        </div>

        <div id="info-transfer-bank" class="info-pembayaran" style="display: none;">
            <div class="form-group">
                <label for="jenis-bank">Jenis Bank</label>
                <select id="jenis-bank" name="jenis_bank">
                    <option value="bri">BRI</option>
                    <option value="bni">BNI</option>
                    <option value="mandiri">Mandiri</option>
                    <option value="sulselbar">Sulselbar</option>
                    <option value="seabank">Seabank</option>
                    <option value="BSI">BSI</option>
                </select>
            </div>
            <div class="form-group">
                <label for="nomor-rekening">Nomor Rekening</label>
                <input type="text" id="nomor-rekening" name="nomor_rekening" placeholder="1234567890">
            </div>
        </div>

        <div id="info-kode-pembayaran" class="info-pembayaran" style="display: none;">
            <p>Kode pembayaran dan barcode akan ditampilkan ketika melakukan checkout produk.</p>
        </div>

        <div class="form-actions">
            <button type="button" class="cancel">Cancel</button>
            <button type="submit">Save Changes</button>
        </div>
    </form>
</div>

                            <div id="daftar-sebagai-penjual" class="form-section" style="display: none;">
                                <h2>Daftar Sebagai Penjual</h2>
                                <p>TBA</p>
                            </div>
                                                    
                            <div id="perjalanan" class="form-section" style="display: none;">
                                <h2>Pesanan Dalam Perjalanan</h2>
                                <p>Ini adalah bagian untuk pesanan dalam perjalanan.</p>
                            </div>
                            
                            <div id="pengembalian" class="form-section" style="display: none;">
                                <h2>Pengembalian</h2>
                                <p>Ini adalah bagian untuk pengembalian.</p>
                            </div>
                            
                            <div id="pembatalan" class="form-section" style="display: none;">
                                <h2>Pembatalan</h2>
                                <p>Ini adalah bagian untuk pembatalan.</p>
            
                            </div>
                            
                    </div>
                    </div>

                </div>
    </body>
    <script>
        function toggleMetodePembayaran() {
            document.querySelectorAll('.info-pembayaran').forEach(div => div.style.display = 'none');
            const selectedMethod = document.getElementById('metode-pembayaran').value;
            document.getElementById(`info-${selectedMethod}`).style.display = 'block';
        }
    </script>
    <script src="{{ asset('mall/js/akun.js') }}"></script>
</html>
@endsection