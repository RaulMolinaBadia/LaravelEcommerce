@include('layouts.navbar')
<link rel="stylesheet" href="{{ asset('./css/styles.css') }}">
<link rel="stylesheet" href="{{ asset('./css/categorias.css') }}">

<div class="categoires-container">
    <div class="title">
        <h2>Lista de categorias</h2>
    </div>
    <div class="container-data">
        <div class="container-number">
            <h4>Nº</h4>
            @foreach ($categorias as $categoria)
                <ul>
                    <li>{{ $categoria->id }}</li>
                </ul>
            @endforeach
        </div>
        <div class="container-name">
            <h4>Nombre</h4>
            @foreach ($categorias as $categoria)
                <ul>
                    <li>
                        {{ $categoria->nombre }}
                    </li>
                </ul>
            @endforeach
        </div>
    </div>
</div>
