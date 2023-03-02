
    <div>
        <div>
            <div >
                <h2>Lista de productos</h2>
            </div>
            @if (Auth::user()->role == 'admin')
            <div>
                <a href="/productos/create"> Crear nuevo producto</a>
            </div>
            @endif
        </div>
    </div>

    <table>
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
                <td>{{ $producto->categoria_id}}</td>
                @if (Auth::user()->role == 'admin')
                <td>
                    <a href="/productos/{{ $producto->id }}/edit">Editar</a>
                    <form action="/productos/{{ $producto->id }}/delete" method="get">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Eliminar</button>
                    </form>
                </td>
                @endif
            </tr>
        @endforeach
    </table>