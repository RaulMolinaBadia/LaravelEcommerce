@include('layouts.navbar')
<link rel="stylesheet" href="{{ asset('./css/styles.css') }}">
<link rel="stylesheet" href="{{ asset('./css/buttons.css') }}">
<link rel="stylesheet" href="{{ asset('./css/productos/edit.css') }}">

{{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> --}}

<div class="containerForm">
    <h1 class="">Editar producto</h1>
    <form method="POST" action="/productos/{{ $productos->id }}">
        @csrf
        @method('PUT')
        <div>
            <label for="nombre" class="form-label">Nombre</label>
            <input class="input" type="text" id="nombre" name="nombre" value="{{ $productos->nombre }}"
                required>
        </div>
        <div>
            <label for="descripcion" class="form-label">Descripción</label>
            <textarea class="textarea" id="descripcion" name="descripcion" rows="3" required>{{ $productos->descripcion }}</textarea>
        </div>
        <div>
            <label for="imagen" class="form-label">Imagen</label>
            <input class="input" type="file" id="imagen" name="imagen" value="{{ $productos->imagen }}">
        </div>
        <div>
            <label for="precio" class="form-label">Precio</label>
            <input class="input" type="number" step="0.01" id="precio" name="precio"
                value="{{ $productos->precio }}" required>
        </div>
        <div>
            <label for="categoria_id" class="form-label">Categoría</label>
            <select id="categoria_id" name="categoria_id" class="form-select" required>
                <option value="">Seleccionar categoría</option>
                @foreach ($categorias as $categoria)
                    <option value="{{ $categoria->id }}"
                        {{ $categoria->id == $productos->categoria_id ? 'selected' : '' }}>
                        {{ $productos->categoria->nombre }}
                    </option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn">Editar producto</button>
    </form>
</div>
