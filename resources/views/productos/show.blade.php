@include('layouts.navbar')

<link rel="stylesheet" href="{{ asset('./css/styles.css') }}">
<link rel="stylesheet" href="{{ asset('./css/buttons.css') }}">
<link rel="stylesheet" href="{{ asset('./css/productos/show.css') }}">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">

<div class="product-container">
    <div class="product-image">
        <img src="/{{ $producto->imagen }}" alt="{{ $producto->nombre }}">
    </div>
    <div class="product-info">
        <h2>{{ $producto->nombre }}</h2>
        <p>{{ $producto->descripcion }}</p>
        <p>Price: {{ $producto->precio }} €</p>
        @auth
            <div class="buttons-wrapper">
                <a href="/stripe">
                    <button class="buy-button">
                        Buy Now
                    </button>
                </a>
                {{-- <a href="">
                <button class="review-button">
                    Review Product
                </button>
            </a> --}}
            </div>
        @endauth
    </div>
</div>

<hr>

<div class="recommended-products">
    <h3>Recommended Products</h3>
    <div class="product-list">
        <div class="product-item">
            <img src="/{{ $producto->imagen }}" alt="{{ $producto->nombre }}">
            <h4>{{ $producto->nombre }}</h4>
            <p>Price: {{ $producto->precio }} €</p>
        </div>
        <div class="product-item">
            <img src="/{{ $producto->imagen }}" alt="{{ $producto->nombre }}">
            <h4>{{ $producto->nombre }}</h4>
            <p>Price: {{ $producto->precio }} €</p>
        </div>
        <div class="product-item">
            <img src="/{{ $producto->imagen }}" alt="{{ $producto->nombre }}">
            <h4>{{ $producto->nombre }}</h4>
            <p>Price: {{ $producto->precio }} €</p>
        </div>
    </div>
</div>
