@include('layouts.navbar')

<link rel="stylesheet" href="{{ asset('./css/styles.css') }}">
<link rel="stylesheet" href="{{ asset('./css/productos.css') }}">
<link rel="stylesheet" href="{{ asset('./css/buttons.css') }}">
<link rel="stylesheet" href="{{ asset('./css/cards.css') }}">
<link rel="stylesheet" href="{{ asset('./css/cart.css') }}">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">


<div>
    <h2>Videogames</h2>
</div>
<div class="containerProducts">
    @foreach ($productos as $producto)
        <div class="card" id={{ $producto->nombre }}>
            <a href="/producto/{{ $producto->id }}">
                <img src="{{ $producto->imagen }}" alt="{{ $producto->nombre }}">
                <p class="card-title"><strong>Nombre:</strong> {{ $producto->nombre }}</p>
                {{-- <p class="card-text"><strong>Descripcion:</strong> {{ $producto->descripcion }}</p> --}}
                <p class="card-text"><strong>Precio: </strong> {{ $producto->precio }}</p>
                {{-- <p class="card-text"><strong>Categoría: </strong> {{ $producto->categoria->nombre }}</p> --}}
                @auth
                    @if (Auth::user()->role == 'user')
                        <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" value="{{ $producto->id }}" name="id">
                            <input type="hidden" value="{{ $producto->nombre }}" name="name">
                            <input type="hidden" value="{{ $producto->precio }}" name="price">
                            <input type="hidden" value="{{ $producto->imagen }}" name="image">
                            <input type="hidden" value="1" name="quantity">
                            <button class="add-to-cart-btn">
                                <i class="fas fa-shopping-cart"></i>
                                <span>Add to Cart</span>
                            </button>
                        </form>
                    @endif
                @endauth
            </a>
        </div>
        {{-- <x-card-videogames :nombre="$producto->nombre" :descripcion="$producto->descripcion" :imagen="$producto->imagen" :precio="$producto->precio" :categoria="$producto->categoria_id" /> --}}
    @endforeach
</div>
