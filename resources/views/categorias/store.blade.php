@include('layouts.navbar')
<link rel="stylesheet" href="{{ asset('./css/styles.css') }}">
<div>
    <div>
        <div>
            <div>
                <div>Agregar nuevo categoria</div>
                <div>
                    <form method="POST" action="{{ route('categorias.store') }}">
                        @csrf
                        <div>
                            <label for="nombre">Nombre</label>
                            <input type="text" name="nombre" id="nombre" required>
                        </div>
                        <button class="btn" type="submit">Agregar categoria</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
