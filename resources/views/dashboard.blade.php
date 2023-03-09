<x-app-layout>
    <x-slot name="header" class="flex">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            <button><a class="btn btn-success btn-dark" href="/productos">View Videojuegos</a></button>
        </h2>
        @if (Auth::user()->role == 'admin')
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            <button><a class="btn btn-success" href="/productos/create">Create Videogames</a></button>
        </h2>
        @endif
        {{-- <a class="btn btn-success" href="/productos">Crear Categorias</a><br> --}}
    </x-slot>
</x-app-layout>
