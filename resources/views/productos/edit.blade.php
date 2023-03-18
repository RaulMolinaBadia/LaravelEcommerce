@include('layouts.navbar')
<link rel="stylesheet" href="{{ asset('./css/styles.css') }}">
<div>
    <h1>Editar producto</h1>
    <form method="POST" action="/productos/{{ $productos->id }}">
        @csrf
        @method('PUT')
        <div>
            <label for="nombre">Nombre</label>
            <input type="text" id="nombre" name="nombre" value="{{ $productos->nombre }}" required>
        </div>
        <div>
            <label for="descripcion">Descripción</label>
            <textarea id="descripcion" name="descripcion" rows="3" required>{{ $productos->descripcion }}</textarea>
        </div>
        <div>
            <label for="imagen">Imagen</label>
            <input type="text" id="imagen" name="imagen" value="{{ $productos->imagen }}" required>
        </div>
        <div>
            <label for="precio">Precio</label>
            <input type="number" step="0.01" id="precio" name="precio" value="{{ $productos->precio }}"
                required>
        </div>
        <div>
            <label for="categoria_id">Categoría</label>
            <select id="categoria_id" name="categoria_id" required>
                <option value="">Seleccionar categoría</option>
                @foreach ($categorias as $categoria)
                    <option value="{{ $categoria->id }}"
                        {{ $categoria->id == $productos->categoria_id ? 'selected' : '' }}>{{ $categoria->id }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit">Editar producto</button>
    </form>
</div>
