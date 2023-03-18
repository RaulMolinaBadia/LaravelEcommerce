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
            <label for="descripcion">Descripción</label>
            <textarea id="descripcion" name="descripcion" rows="3" required></textarea>
        </div>
        <div>
            <label for="imagen">Imagen</label>
            <input type="file" id="imagen" name="imagen" required>
        </div>
        <div>
            <label for="precio">Precio</label>
            <input type="number" step="0.01" id="precio" name="precio" required>
        </div>
        <div>
            <label for="categoria_id">Categoría</label>
            <select id="categoria_id" name="categoria_id" required>
                <option value="">Seleccionar categoría</option>
                @foreach ($categorias as $categoria)
                    <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit">Crear producto</button>
    </form>
</div>
