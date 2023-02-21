<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Http\Requests\StoreProductoRequest;
use App\Http\Requests\UpdateProductoRequest;
use Illuminate\Http\Request;

class ProductoController extends Controller
{

    public function createProduct()
    {
    }

    public function showProduct(Producto $producto)
    {
        //
    }

    public function editProduct(Producto $producto)
    {
        //
    }

    public function updateProduct(Request $request, Producto $producto)
    {
        //
    }

    public function deleteProduct(Request $request, Producto $producto)
    {
        //
    }

}
