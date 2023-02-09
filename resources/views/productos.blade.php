<link rel="stylesheet" href="https://unpkg.com/@picocss/pico@1.*/css/pico.min.css">
@foreach ($productos as $producto)
    Nombre: {{ $producto->nombre }} <br>
    Descripcion: {{ $producto->descripcion }} <br>
    Precio: {{ $producto->precio }} <br>
    Imagen: {{ $producto->imagen }}
@endforeach