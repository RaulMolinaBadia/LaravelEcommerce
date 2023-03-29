<link rel="stylesheet" href="{{ asset('./css/dashboard.css') }}">
<link rel="stylesheet" href="{{ asset('./css/styles.css') }}">
<link rel="stylesheet" href="{{ asset('./css/buttons.css') }}">
<link rel="shortcut icon" href="/img/icon32.png" type="image/x-icon">

@include('layouts.navbar')
<div class="columns-container">
    <div class="column">
        <h2>MANAGE PRODUCTS</h2>
        <a class="btn" href="/productos/create">Crear Producto</a>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Imagen</th>
                    <th>Nombre</th>
                    <th>Descripcion</th>
                    <th>Precio</th>
                    <th>Categoria</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($productos as $producto)
                    <tr>
                        <td> {{ $producto->id }}</td>
                        <td><img src="{{ $producto->imagen }}" alt="{{ $producto->nombre }}"></td>
                        <td>{{ $producto->nombre }}</td>
                        <td>{{ $producto->descripcion }}</td>
                        <td>{{ $producto->precio }}</td>
                        <td>{{ $producto->categoria_id }}</td>
                        <td class="accions">
                            <a class="btn" href="/productos/{{ $producto->id }}/edit">Editar</a>
                            <form action="/productos/{{ $producto->id }}/delete" method="get">
                                @csrf
                                @method('DELETE')
                                <button class="btn" type="submit">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="column">
        <h2>MANAGE CATEGORIES</h2>
        <a class="btn" href="/categorias/create">Crear Categoria</a>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categorias as $categoria)
                    <tr class="categories">
                        <td>{{ $categoria->id }}</td>
                        <td>{{ $categoria->nombre }}</td>
                        <td class="accions">
                            <a class="btn" href="/categorias/{{ $categoria->id }}/edit">Editar</a>
                            <form action="/categorias/{{ $categoria->id }}/delete" method="get">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
