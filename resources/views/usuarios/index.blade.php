@include('layouts.navbar')

<link rel="stylesheet" href="{{ asset('./css/styles.css') }}">
{{-- <link rel="stylesheet" href="{{ asset('./css/productos.css') }}"> --}}
<link rel="stylesheet" href="{{ asset('./css/buttons.css') }}">
<link rel="stylesheet" href="{{ asset('./css/cards.css') }}">
<link rel="stylesheet" href="{{ asset('./css/cart.css') }}">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">


<div>
    <h2>Usuarios</h2>
</div>
<div class="containerProducts">
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
                        <button><a href="/usuarios/{{ $usuario->id }}/edit">Editar</a></button>
                        <form action="/usuarios/{{ $usuario->id }}/delete" method="get">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
