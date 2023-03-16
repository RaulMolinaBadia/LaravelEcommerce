<link rel="stylesheet" href="{{ asset('./css/navbar.css') }}">
<link rel="stylesheet" href="{{ asset('./css/cart.css') }}">
<script src="{{ asset('./a.js') }}"></script>

<nav class="navbar">
    <div class="navbar-container">
        <div class="navbar-logo">
            <img src="https://via.placeholder.com/50x50" alt="Logo">
        </div>
        <ul class="navbar-menu">
            <li class="navbar-menu-item"><a href="#">Home</a></li>
            <li class="navbar-menu-item"><a href="/prodcutos">Videogames</a></li>
            <li class="navbar-menu-item"><a href="#">Categories</a></li>
            <li class="navbar-menu-item"><a href="#">Dashboard</a></li>
            <li class="navbar-menu-item"><a href="#">????</a></li>
            <li class="navbar-menu-item">
                @auth
                    {{-- @if (Auth::user()->role == 'admin')
                        <x-nav-link href="/usuarios">
                            Usuarios
                        </x-nav-link>
                    @endif --}}
                    <a href="{{ route('cart.list') }}" class="flex items-center">
                        <svg class="cart" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path
                                d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z">
                            </path>
                        </svg>
                        <span class="text-red-700">{{ Cart::getTotalQuantity() }}</span>
                    </a>
                @endauth
            </li>
        </ul>

        <div class="navbar-dropdown">
            <div class="navbar-dropdown-toggle">
                @auth
                    <div>{{ Auth::user()->name }}</div>
                @endauth
            </div>
            <ul class="navbar-dropdown-menu">
                <li class="navbar-dropdown-menu-item">
                    <x-dropdown-link :href="route('profile.edit')">
                        {{ __('Profile') }}
                    </x-dropdown-link>
                </li>
                <li class="navbar-dropdown-menu-item">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <x-dropdown-link :href="route('logout')"
                            onclick="event.preventDefault();
                        this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </x-dropdown-link>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</nav>
