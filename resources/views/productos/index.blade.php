@include('layouts.navbar')

<link rel="stylesheet" href="{{ asset('./css/styles.css') }}">
<link rel="stylesheet" href="{{ asset('./css/productos.css') }}">
<link rel="stylesheet" href="{{ asset('./css/buttons.css') }}">
<link rel="stylesheet" href="{{ asset('./css/cards.css') }}">
<script defer src="/a.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js" integrity="sha512-fD9DI5bZwQxOi7MhYWnnNPlvXdp/2Pj3XSTRrFs5FQa4mizyGLnJcN6tuvUS6LbmgN1ut+XGSABKvjN0H6Aoow==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />{{-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css"> --}}



@if (Route::currentRouteName() == 'productos')
    @include('layouts.searchbar')
@else
    <div>
        <h2>Videogames</h2>
    </div>
@endif

<div class="containerProducts">
    @foreach ($productos as $producto)
        <div class="card" id="{{ $producto->nombre }}">
            <a href="/productos/{{ $producto->id }}">
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
                                <i class="fas fa-cart-shopping"></i>
                                <span>Add to Cart</span>
                            </button>
                        </form>
                    @endif
                @endauth
            </a>
        </div>
    @endforeach
</div>
