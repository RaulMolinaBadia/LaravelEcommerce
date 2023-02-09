<link rel="stylesheet" href="https://unpkg.com/@picocss/pico@1.*/css/pico.min.css">
<h1>busca</h1>

@foreach ($productos as $producto)
    Nombre: {{ $producto->nombre }} <br>
    Descripcion: {{ $producto->descripcion }} <br>
    Precio: {{ $producto->precio }} <br>
    Imagen: {{ $producto->imagen }}
@endforeach
<form action="/busca" method="get">
    <input type="text" name="texto">
    <input type="submit" value="enviar">
</form>
