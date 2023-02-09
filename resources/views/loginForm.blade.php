<link rel="stylesheet" href="https://unpkg.com/@picocss/pico@1.*/css/pico.min.css">
<form action="{{ url('/login') }}" method="post">
    @csrf
    <label for="">
        Usuario
        <input type="text" name="user" id="">
    </label>
    <label for="">
        Contraseña
        <input type="password" name="password" id="">
    </label>
    <input type="submit" value="enviar">
</form>
