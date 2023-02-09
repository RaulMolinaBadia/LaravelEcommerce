<link rel="stylesheet" href="https://unpkg.com/@picocss/pico@1.*/css/pico.min.css">
@if (Session::get('user'))
    <h1>bienvenido ususario {{ Session::get('user') }}</h1>
    <p><a href="{{ url('/logout') }}">Salir</a></p>
@else
    <h1>este usuario no existe</h1>
    <p><a href="{{ url('/loginForm') }}">Iniciar sesión</a></p>
@endif
