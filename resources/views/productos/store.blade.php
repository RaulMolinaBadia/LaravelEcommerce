@include('layouts.navbar')
<link rel="stylesheet" href="{{ asset('./css/styles.css') }}">
<link rel="stylesheet" href="{{ asset('./css/buttons.css') }}">

<div>
    <div>
        <div>
            <div>
                <div>Agregar nuevo producto</div>
                <div>
                    <form method="POST" action="{{ route('productos.store') }}">
                        @csrf
                        <div>
                            <label for="nombre">Nombre</label>
                            <input type="text" name="nombre" id="nombre" required>
                        </div>

                        <div>
                            <label for="descripcion">Descripción</label>
                            <textarea name="descripcion" id="descripcion" rows="3" required></textarea>
                        </div>

                        <div>
                            <label for="imagen">Imagen</label>
                            <input type="text" name="imagen" id="imagen" required>
                        </div>

                        <div>
                            <label for="precio">Precio</label>
                            <input type="number" name="precio" id="precio" required>
                        </div>

                        <div>
                            <label for="id_categoria">Categoría</label>
                            <select name="id_categoria" id="id_categoria" required>
                                @foreach ($categorias as $categoria)
                                    <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
                                @endforeach
                            </select>
                        </div>

                        <button class="btn" type="submit">Agregar producto</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
