@include('layouts.navbar')
<link rel="stylesheet" href="{{ asset('./css/styles.css') }}">
<link rel="stylesheet" href="{{ asset('./css/usuarios.css') }}">
<div>
    <h1>Editar producto</h1>
    <form method="POST" action="/usuarios/{{ $usuario->id }}">
        @csrf
        @method('PUT')
        <div>
            <label for="nombre">Nombre</label>
            <input type="text" id="nombre" name="nombre" value="{{ $usuario->name }}" required>
        </div>
        <div>
            <label for="email">email</label>
            <input type="email" id="email" name="email" value="{{ $usuario->email }}" required></input>
        </div>
        <div>
            <label for="password">password</label>
            <input type="password" id="password" name="password" value="{{ $usuario->password }}" required>
        </div>
        <div>
            <label for="role">role</label>
            <input type="text" id="role" name="role" value="{{ $usuario->role }}" required>
        </div>
        <button class="btn" type="submit">Editar usuario</button>
    </form>
</div>
