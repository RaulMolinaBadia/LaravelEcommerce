<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <link rel="shortcut icon" href="/img/icon32.png" type="image/x-icon">

    <!-- Fonts -->
    <link rel="stylesheet" href="{{ asset('./css/welcome/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('./css/buttons/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('./css/styles.css') }}">
</head>

<body>
    <div class="btn-container">
        @if (Route::has('login'))
            @auth
                <a href="{{ url('/dashboard') }}" class="btn">Dashboard</a>
            @else
                <a href="{{ route('login') }}" class="btn">Log in</a>
                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="btn">Register</a>
                @endif
            @endauth
        @endif
    </div>
</body>

</html>
