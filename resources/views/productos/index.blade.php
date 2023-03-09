<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('./css/styles.css') }}">
    <title>Document</title>
</head>
<body>
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
    
    {{-- <table>
    
        <tr>
            <th>No</th>
            <th>Nombre</th>
            <th>Descripción</th>
            <th>Imagen</th>
            <th>Precio</th>
            <th>Categoría</th>
        </tr>
        @foreach ($productos as $producto)
            <tr>
                <td>{{ $producto->id }}</td>
                <td>{{ $producto->nombre }}</td>
                <td>{{ $producto->descripcion }}</td>
                <td>{{ $producto->imagen }}</td>
                <td>{{ $producto->precio }}</td>
                <td>{{ $producto->categoria_id }}</td>
            </tr>
        @endforeach
    </table> --}}
    <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
        @foreach ($productos as $producto)
        <div class="card">
            <img src="https://img.freepik.com/vector-gratis/consola-juegos-letras-letrero-neon-fondo-ladrillo_1262-11854.jpg" alt="{{ $producto->nombre }}">
            <div class="card-body">
                <h5 class="card-title">{{ $producto->nombre }}</h5>
                <p class="card-text">{{ $producto->descripcion }}</p>
                <p class="card-text"><strong>Precio:</strong> {{ $producto->precio }}</p>
                <p class="card-text"><strong>Categoría:</strong> {{ $producto->categoria_id }}</p>
            </div>
        </div>
        @endforeach
    </div>
    
    {{-- @if (Auth::user()->role == 'admin')
            <td>
                <a href="/productos/{{ $producto->id }}/edit">Editar</a>
                <form action="/productos/{{ $producto->id }}/delete" method="get">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Eliminar</button>
                </form>
            </td>
            @endif --}}
</body>
</html>
