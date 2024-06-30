<style>
.product-list {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 20px;
    margin: 20px;
}

.product-item {
    display: flex;
    flex-direction: column;
    align-items: center;
    padding: 10px;
    transition: transform 0.3s ease-in-out;
}

.product-item:hover {
    transform: translateY(-5px);
}

.product-image {
    width: 250px;
    height: 250px;
    overflow: hidden;
    margin-bottom: 10px;
}

.product-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.product-info {
    text-align: left;
    width: 100%;
    padding: 0 10px;
}

.product-info h3 {
    font-size: 1.2rem;
    margin-bottom: 10px;
    color: var(--tulisan-hitam);
}

.store-name {
    font-size: 0.9rem;
    color: var(--tulisan-abu);
    margin-bottom: 10px;
}

.rating {
    display: flex;
    align-items: center;
    margin-bottom: 10px;
}

.rating-stars {
    display: flex;
    align-items: center;
}

.rating img {
    width: 20px;
    height: 20px;
}

.rating-value {
    font-weight: bold;
    color: var(--tulisan-hitam);
    margin-left: 5px;
}

.rating-count {
    color: var(--tulisan-abu);
    font-size: 0.9em;
}

.prices {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    margin-bottom: 10px;
}

.prices p {
    margin: 0;
    padding: 0;
}

.current-price {
    font-size: 1.1rem;
    font-weight: bold;
    color: var(--tulisan-hitam);
}

.discount-price {
    font-size: 0.9rem;
    color: var(--tulisan-abu);
    text-decoration: line-through;
}

.product-item a {
    text-decoration: none;
}
</style>

<div class="product-list">
    @foreach($products as $product)
    <div class="product-item">
        <a href="{{ route('product.show', $product->id) }}">
            <div class="product-image">
                <?php $imagePath = 'mall/img/Produk/' . $product->category->name . '/' . $product->details->image; ?>
                <img src="{{ asset($imagePath) }}" alt="{{ $product->name }}">
            </div>
            <div class="product-info">
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
                    @if($product->details->discount_price)
                    <p class="discount-price">Rp{{ $product->details->discount_price }}</p>
                    @endif
                </div>
            </div>
        </a>
    </div>
    @endforeach
</div>

