@extends('layout.main')
@section('title', $product->name )
@section('content')
<link rel="stylesheet" href="{{asset('mall/css/lamanProduk.css')}}">
<link rel="stylesheet" href="{{asset('mall/css/home_shop.css')}}">
@include('includes.header-login')
<div class="product-from-home">
        <a href="{{ url('homeShop') }}">Home</a> /{{$product->category->name}} /{{ $product->name }}
    </div>
<div class="product-page">
    <div class="product-images">
        <div class="main-image">
            <img src="{{ asset('mall/img/Produk/' . $product->category->name . '/' . $product->details->image) }}" alt="{{ $product->name }}">
        </div>
        <div class="thumbnail-images">
        @if (!empty($product->details->additional_images))
            @foreach($product->details->additional_images as $image)
                <img src="{{ asset('mall/img/Produk/' . $product->category->name . '/' . $image) }}" alt="{{ $product->name }}">
            @endforeach
        @endif
        </div>
    </div>
    <div class="produk-info">
        <h3>{{ $product->name }}</h3>
        <p class="harga">Rp{{ $product->price }}</p>
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
        <p class="description">{{ $product->description }}</p>
        <div class="share-wishlist">
            <span>Share</span>
            <a href="#" class="share">
                <img src="{{ asset('mall/vectors/fb-icon.svg') }}" alt="Facebook">
            </a>
            <a href="#" class="share">
                <img src="{{ asset('mall/vectors/ig-icon.svg') }}" alt="Instagram">
            </a>
            <a href="#" class="share">
                <img src="{{ asset('mall/vectors/whatsapp-icon.svg') }}" alt="WhatsApp">
            </a>
        </div>            
        <div class="purchase-options">
            <button class="add-to-cart">Tambah ke Keranjang</button>
            <button class="buy-now">Beli Sekarang</button>
        </div>
        <div class="shipping">
            <div class="address-container" id="saved-address">
                <p>Dikirim ke:</p>
                <p id="current-address">
                    <span id="address-line">Alamat Lengkap</span>, 
                    <span id="city">Kota</span>, 
                    <span id="province">Provinsi</span> 
                    <span id="postal-code">Kode Pos</span>
                </p>
                <button id="edit-address-button">Edit Alamat</button>
            </div>
        
            <div class="new-address-form" id="new-address-form" style="display: none;">
                <p>Masukkan Alamat Baru</p>
                <form id="addressForm">
                    <div class="form-group">
                        <input type="text" id="newAddress" name="newAddress" placeholder="Alamat Lengkap" required>
                    </div>
                    <div class="form-group">
                        <input type="text" id="newCity" name="newCity" placeholder="Kota" required>
                    </div>
                    <div class="form-group">
                        <input type="text" id="newProvince" name="newProvince" placeholder="Provinsi" required>
                    </div>
                    <div class="form-group">
                        <input type="text" id="newPostalCode" name="newPostalCode" placeholder="Kode Pos" required>
                    </div>
                    <button type="submit">Simpan Alamat Baru</button>
                </form>
            </div>
            <p>Lihat opsi pengiriman</p>
            <select id="shipping-options">
            </select>
        </div>
    </div>
</div>

<div class="store-info">
    @if ($product->details->store)
        <div class="store-left">
            <div class="store-avatar">
                <img src="{{ asset('mall/img/Pengguna/' . $product->details->store->avatar) }}" alt="Avatar Toko">
            </div>
            <div class="store-details">
                <div class="store-name">{{ $product->details->store->name }}</div>
                <div class="store-status">
                    Online {{ \Carbon\Carbon::parse($product->details->store->last_online)->diffForHumans() }}
                </div>
                <div class="store-buttons">
                    <button class="chat-button">Chat Sekarang</button>
                    <button class="follow-button">Ikuti Toko</button>
                </div>
            </div>
        </div>
        <div class="store-right">
            <div class="store-stat">
                <div class="stat-value">{{ $product->details->store->ratings }}</div>
                <div class="stat-label">Penilaian</div>
            </div>
            <div class="store-stat">
                <div class="stat-value">{{ $product->details->store->followers }}</div>
                <div class="stat-label">Pengikut</div>
            </div>
            <div class="store-stat">
                <div class="stat-value">{{ \Carbon\Carbon::parse($product->details->store->joined)->format('d/m/Y') }}</div>
                <div class="stat-label">Waktu Bergabung</div>
            </div>
            <div class="store-stat">
                <div class="stat-value">{{ $product->details->store->response_rate }}%</div>
                <div class="stat-label">Presentase Chat Dibalas</div>
            </div>
        </div>
    @else
        <p>Tidak ada informasi toko untuk produk ini.</p>
    @endif
</div>

<div class="tabs">
    <ul class="tab-list">
        <li class="tab-item active" data-tab="description">Description</li>
        <li class="tab-item" data-tab="reviews">Reviews</li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane active" id="description">
            <p>{{$product->description }}</p>
        </div>
        <div class="tab-pane" id="reviews">
            <p>{{ $product->details->reviews }}</p>
        </div>
    </div>
</div>

<div class="related-products">
    <h2>PRODUK TERKAIT</h2>
    <div class="related">   
        @foreach($relatedProducts as $relatedProduct)
        <div class="related-product">
            <a href="{{ route('product.show', $relatedProduct->id) }}">
                <img src="{{ asset('mall/img/Produk/' . $relatedProduct->category->name . '/' . $relatedProduct->details->image) }}" alt="{{ $relatedProduct->name }}">
                <div class="product-details">
                    <h3 class="product-name">{{ $relatedProduct->name }}</h3>
                    <p class="store-name">{{ $relatedProduct->details->store_name }}</p>
                    <div class="rating">
                        <div class="rating-stars">
                            @for ($i = 0; $i < 5; $i++)
                                @if ($i < floor($relatedProduct->details->rating_value))
                                    <img src="{{ asset('mall/vectors/star.svg') }}" alt="Rating Star">
                                @elseif ($i < ceil($relatedProduct->details->rating_value))
                                    <img src="{{ asset('mall/vectors/star-half.svg') }}" alt="Rating Star">
                                @else
                                    <img src="{{ asset('mall/vectors/star-empty.svg') }}" alt="Rating Star">
                                @endif
                            @endfor
                        </div>
                        <span class="rating-value">{{ $relatedProduct->details->rating_value }}</span>
                        <span class="rating-count">({{ $relatedProduct->details->rating_count }})</span>
                    </div>
                    <div class="prices">
                        <p class="current-price">Rp{{ $relatedProduct->price }}</p>
                    </div>
                </div>
            </a>
        </div>
        @endforeach
    </div>
</div>

<script src="{{asset('mall/js/lamanProduk.js')}}"></script>
@endsection