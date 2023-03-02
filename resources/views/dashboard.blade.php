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

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100 text-center">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
