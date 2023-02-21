<link rel="stylesheet" href="https://unpkg.com/@picocss/pico@1.*/css/pico.min.css">
<h1>mi web raul</h1>
@isset($nombre)
<h3>
    {{ $nombre }}
</h3>
@endisset
<form action="/busca" method="get">
    <input type="text" name="texto">
    <input type="submit" value="enviar">
</form>
