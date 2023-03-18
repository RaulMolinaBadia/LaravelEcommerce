<link rel="stylesheet" href="{{ asset('./css/dashboard.css') }}">
<link rel="stylesheet" href="{{ asset('./css/styles.css') }}">
<link rel="shortcut icon" href="/img/icon32.png" type="image/x-icon">

@include('layouts.navbar')
<div class="columns-container">
    <div class="column">
        <h2>MANAGE PRODUCTS</h2>
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
                            <button><a class="btn" href="/productos/{{ $producto->id }}/edit">Editar</a></button>
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
                            <button><a class="btn" href="/categorias/{{ $categoria->id }}/edit">Editar</a></button>
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

    {{-- <div class="column">
        <h2>MANAGE USERS</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Role</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($usuarios as $usuario)
                    <tr>
                        <td>{{ $usuario->id }}</td>
                        <td>{{ $usuario->name }}</td>
                        <td>{{ $usuario->email }}</td>
                        <td>{{ $usuario->password }}</td>
                        <td>{{ $usuario->role }}</td>

                        <td>
                            <button><a href="/categorias/{{ $categoria->id }}/edit">Editar</a></button>
                            <form action="/categorias/{{ $categoria->id }}/delete" method="get">
                                @csrf
                                @method('DELETE')
                                <button type="submit">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div> --}}
</div>
