<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\CategoriaController;

class MasterController extends Controller
{
    public function index()
    {
        $productos = (new ProductosController())->getProducts();
        $categorias = (new CategoriaController())->getCategories();

        return view('dashboard', [
            'productos' => $productos,
            'categorias' => $categorias,
        ]);
    }
}
