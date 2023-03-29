@include('layouts.navbar')
<link rel="stylesheet" href="{{ asset('./css/styles.css') }}">
<div>
    <h1>Crear categoria</h1>
    <form method="POST" action="/categorias">
        @csrf
        <div>
            <label for="nombre">Nombre</label>
            <input type="text" id="nombre" name="nombre" required>
        </div>
        <button class="btn" type="submit">Crear categoria</button>
    </form>
</div>
