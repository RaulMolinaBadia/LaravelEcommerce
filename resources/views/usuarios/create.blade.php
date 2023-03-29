@include('layouts.navbar')
<link rel="stylesheet" href="{{ asset('./css/styles.css') }}">
<div>
    <h1>Crear producto</h1>
    <form method="POST" action="/productos" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="nombre">Nombre</label>
            <input type="text" id="nombre" name="nombre" required>
        </div>
        <div>
            <label for="email">email</label>
            <input type="email" id="email" name="email" required></input>
        </div>
        <div>
            <label for="password">password</label>
            <input type="password" id="password" name="password" required>
        </div>
        <div>
            <label for="role">role</label>
            <input type="text" id="role" name="role" required>
        </div>
        <button class="btn" type="submit">Crear Usuario</button>
    </form>
</div>
