    <link rel="stylesheet" href="{{ asset('./css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('./css/productos/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('./css/buttons/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('./css/cards/styles.css') }}">

    <x-app-layout>
        <div>
            <div>
                <div>
                    <h2>Lista de productos</h2>
                </div>
                @if (Auth::user()->role == 'admin')
                    <div>
                        <a href="/productos/create"> Crear nuevo producto</a>
                    </div>
                @endif
            </div>
        </div>
        <div class="containerProducts">
            @foreach ($productos as $producto)
                <div class="card">
                    <img src="{{ $producto->imagen }}" alt="{{ $producto->nombre }}">
                    <h5 class="card-title"><strong>Nombre:</strong> {{ $producto->nombre }}</h5>
                    <p class="card-text"><strong>Descripcion:</strong> {{ $producto->descripcion }}</p>
                    <p class="card-text"><strong>Precio: </strong> {{ $producto->precio }}</p>
                    <p class="card-text"><strong>Categoría: </strong> {{ $producto->categoria_id }}</p>
                    {{-- TODO --}}
                    {{-- {{ $categoriaName = Categoria::findOrFail($producto->categoria_id) }} --}}
                    @if (Auth::user()->role == 'admin')
                        <div class="adminButtons">
                            <a class="btn" href="/productos/{{ $producto->id }}/edit">Editar</a>
                            <form action="/productos/{{ $producto->id }}/delete" method="get">
                                @csrf
                                @method('DELETE')
                                <button class="btn" type="submit">Eliminar</button>
                            </form>
                        </div>
                    @endif
                    @auth
                        <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" value="{{ $producto->id }}" name="id">
                            <input type="hidden" value="{{ $producto->nombre }}" name="name">
                            <input type="hidden" value="{{ $producto->precio }}" name="price">
                            <input type="hidden" value="{{ $producto->imagen }}" name="image">
                            <input type="hidden" value="1" name="quantity">
                            <button class="px-4 py-1.5 text-white text-sm bg-blue-800 rounded">Add To Cart</button>
                        </form>
                    @endauth
                </div>
                {{-- <x-card-videogames :nombre="$producto->nombre" :descripcion="$producto->descripcion" :imagen="$producto->imagen" :precio="$producto->precio" :categoria="$producto->categoria_id" /> --}}
            @endforeach
        </div>
    </x-app-layout>
