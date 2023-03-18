<?php

namespace Database\Seeders;

use App\Models\Categoria;
use App\Models\Producto;
use Illuminate\Database\Seeder;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categorias = Categoria::all();

        $productos = [
            [
                'nombre' => 'Producto 1',
                'descripcion' => 'Descripción del producto 1',
                'imagen' => 'storage/covers/assetoCorsa.jpg',
                'precio' => 10.99,
                'categoria_id' => $categorias->random()->id,
            ],
            [
                'nombre' => 'Producto 2',
                'descripcion' => 'Descripción del producto 2',
                'imagen' => 'storage/covers/assetoCorsaCompetizione.jpeg',
                'precio' => 19.99,
                'categoria_id' => $categorias->random()->id,
            ],
            [
                'nombre' => 'Producto 3',
                'descripcion' => 'Descripción del producto 3',
                'imagen' => 'storage/covers/dayZ.jpeg',
                'precio' => 29.99,
                'categoria_id' => $categorias->random()->id,
            ],
            [
                'nombre' => 'Producto 4',
                'descripcion' => 'Descripción del producto 4',
                'imagen' => 'storage/covers/diabloIV.jpg',
                'precio' => 29.99,
                'categoria_id' => $categorias->random()->id,
            ],
            [
                'nombre' => 'Producto 5',
                'descripcion' => 'Descripción del producto 5',
                'imagen' => 'storage/covers/dragonBallZ.jpeg',
                'precio' => 29.99,
                'categoria_id' => $categorias->random()->id,
            ],
            [
                'nombre' => 'Producto 6',
                'descripcion' => 'Descripción del producto 6',
                'imagen' => 'storage/covers/eldenRing.jpeg',
                'precio' => 29.99,
                'categoria_id' => $categorias->random()->id,
            ],
            [
                'nombre' => 'Producto 7',
                'descripcion' => 'Descripción del producto 7',
                'imagen' => 'storage/covers/espaceFromTarkov.jpeg',
                'precio' => 29.99,
                'categoria_id' => $categorias->random()->id,
            ],
            [
                'nombre' => 'Producto 8',
                'descripcion' => 'Descripción del producto 8',
                'imagen' => 'storage/covers/farCry6.jpeg',
                'precio' => 29.99,
                'categoria_id' => $categorias->random()->id,
            ],
            [
                'nombre' => 'Producto 9',
                'descripcion' => 'Descripción del producto 9',
                'imagen' => 'storage/covers/fifa23.jpg',
                'precio' => 29.99,
                'categoria_id' => $categorias->random()->id,
            ],
            [
                'nombre' => 'Producto 10',
                'descripcion' => 'Descripción del producto 10',
                'imagen' => 'storage/covers/forzaHorizon5.jpeg',
                'precio' => 29.99,
                'categoria_id' => $categorias->random()->id,
            ],
            [
                'nombre' => 'Producto 11',
                'descripcion' => 'Descripción del producto 11',
                'imagen' => 'storage/covers/gow.jpeg',
                'precio' => 10.99,
                'categoria_id' => $categorias->random()->id,
            ],
            [
                'nombre' => 'Producto 12',
                'descripcion' => 'Descripción del producto 12',
                'imagen' => 'storage/covers/gtaV.jpeg',
                'precio' => 19.99,
                'categoria_id' => $categorias->random()->id,
            ],
            [
                'nombre' => 'Producto 13',
                'descripcion' => 'Descripción del producto 13',
                'imagen' => 'storage/covers/howartsLegacy.jpg',
                'precio' => 29.99,
                'categoria_id' => $categorias->random()->id,
            ],
            [
                'nombre' => 'Producto 14',
                'descripcion' => 'Descripción del producto 14',
                'imagen' => 'storage/covers/hzd.jpeg',
                'precio' => 29.99,
                'categoria_id' => $categorias->random()->id,
            ],
            [
                'nombre' => 'Producto 15',
                'descripcion' => 'Descripción del producto 15',
                'imagen' => 'storage/covers/milesMorales.jpg',
                'precio' => 29.99,
                'categoria_id' => $categorias->random()->id,
            ],
            [
                'nombre' => 'Producto 16',
                'descripcion' => 'Descripción del producto 16',
                'imagen' => 'storage/covers/nba2k23.jpg',
                'precio' => 29.99,
                'categoria_id' => $categorias->random()->id,
            ],
            [
                'nombre' => 'Producto 17',
                'descripcion' => 'Descripción del producto 17',
                'imagen' => 'storage/covers/r6.jpg',
                'precio' => 29.99,
                'categoria_id' => $categorias->random()->id,
            ],
            [
                'nombre' => 'Producto 18',
                'descripcion' => 'Descripción del producto 18',
                'imagen' => 'storage/covers/rdr2.jpeg',
                'precio' => 29.99,
                'categoria_id' => $categorias->random()->id,
            ],
            [
                'nombre' => 'Producto 19',
                'descripcion' => 'Descripción del producto 19',
                'imagen' => 'storage/covers/resientEvil2.jpeg',
                'precio' => 29.99,
                'categoria_id' => $categorias->random()->id,
            ],
            [
                'nombre' => 'Producto 20',
                'descripcion' => 'Descripción del producto 20',
                'imagen' => 'storage/covers/wwe2k23.jpg',
                'precio' => 29.99,
                'categoria_id' => $categorias->random()->id,
            ],
        ];

        foreach ($productos as $producto) {
            Producto::create($producto);
        }
    }
}
