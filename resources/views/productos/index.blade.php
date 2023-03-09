<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('./css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('./css/productos/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('./css/buttons/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('./css/cards/styles.css') }}">
    <title>Document</title>
</head>

<body>
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
                    {{ $categoriaName = Categoria::findOrFail($producto->categoria_id) }}
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
                </div>
                {{-- <x-card-videogames :nombre="$producto->nombre" :descripcion="$producto->descripcion" :imagen="$producto->imagen" :precio="$producto->precio" :categoria="$producto->categoria_id" /> --}}
            @endforeach
        </div>
    </x-app-layout>
</body>

</html>
