@include('layouts.navbar')
<div>
    <div>
        <div>
            <h2>Lista de categorias</h2>
        </div>
    </div>
</div>

<table>
    <tr>
        <th>No</th>
        <th>Nombre</th>
    </tr>
    @foreach ($categorias as $categoria)
        <tr>
            <td>{{ $categoria->id }}</td>
            <td>{{ $categoria->nombre }}</td>
            <td>
                <a href="/categorias/{{ $categoria->id }}/edit">Editar</a>
                <form action="/categorias/{{ $categoria->id }}/delete" method="get">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Eliminar</button>
                </form>
        </tr>
    @endforeach
</table>
