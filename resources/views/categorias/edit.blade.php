<div>
    <h1>Editar categoria</h1>
    <form method="POST" action="/categorias/{{ $categorias->id }}">
        @csrf
        @method('PUT')
        <div>
            <label for="nombre">Nombre</label>
            <input type="text" id="nombre" name="nombre" value="{{ $categorias->nombre }}" required>
        </div>
        <button type="submit">Editar categoria</button>
    </form>
</div>