<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Categoria;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categorias = [
            [
                'nombre' => 'Acción',
            ],
            [
                'nombre' => 'Aventura',
            ],
            [
                'nombre' => 'Deportes',
            ],
            [
                'nombre' => 'Estrategia',
            ],
            [
                'nombre' => 'RPG',
            ],
            [
                'nombre' => 'Simulación',
            ],
            [
                'nombre' => 'Terror',
            ],
            [
                'nombre' => 'Tercera Persona',
            ],
            [
                'nombre' => 'Primera Persona',
            ],
            [
                'nombre' => 'Multijugador',
            ],
            [
                'nombre' => 'Cooperativo',
            ],
            [
                'nombre' => 'Online',
            ],
            [
                'nombre' => 'MMO',
            ],
            [
                'nombre' => 'Carreras',
            ],
            [
                'nombre' => 'Lucha',
            ],
            [
                'nombre' => 'Survival',
            ],
        ];

        foreach ($categorias as $categoria) {
            Categoria::create($categoria);
        }
    }
}
