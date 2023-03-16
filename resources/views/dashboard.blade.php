<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('./css/buttons/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('./css/cards/styles.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('./css/styles.css') }}"> --}}
    <link rel="shortcut icon" href="/img/icon32.png" type="image/x-icon">
</head>

{{-- <body> --}}
    {{-- <x-app-layout> --}}
        {{-- TODO en esta pagina ira un panel de administracion el cual servira para añadir eliminar o modificar productos o categorias--}}
        @include('layouts.navbar')
        {{-- @if (Auth::user()->role == 'admin') --}}
        <div>
            <a href="/categorias/create"> Crear nueva categoria</a>
        </div>
        <div>
            <a href="/categorias/create"> Crear nueva categoria</a>
        </div>
        {{-- @endif --}}
    {{-- </x-app-layout> --}}
{{-- </body> --}}

</html>
