<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Producto;
use Illuminate\Http\Request;

class ProductosController extends Controller
{

    public function index()
    {
        $productos = Producto::all();
        return view('productos.index', compact('productos'));
    }

    public function getProducts()
    {
        $productos = Producto::all();
        return $productos;
    }

    public function create()
    {
        $categorias = Categoria::all();
        return view('productos.create', compact('categorias'));
    }

    public function store(Request $request)
    {
        $productos = new Producto();
        $productos->nombre = $request->input('nombre');
        $productos->descripcion = $request->input('descripcion');
        $path = $request->imagen->store('covers', 'public');
        $productos->imagen = '/storage/' . $path;
        $productos->precio = $request->input('precio');
        $productos->categoria_id = $request->input('categoria_id');
        $productos->save();

        return redirect('/productos');
    }

    public function show($id)
    {
        $producto = Producto::findOrFail($id);
        return view('productos.show', compact('producto'));
    }

    public function edit($id)
    {
        $productos = Producto::find($id);
        $categorias = Categoria::all();
        return view('productos.edit', compact('productos', 'categorias'));
    }

    public function update(Request $request, $id)
    {
        $productos = Producto::find($id);
        $productos->nombre = $request->input('nombre');
        $productos->descripcion = $request->input('descripcion');
        $productos->imagen = $request->input('imagen');
        $productos->precio = $request->input('precio');
        $productos->categoria_id = $request->input('categoria_id');
        $productos->save();

        return redirect('/productos');
    }

    public function destroy(Request $producto)
    {
        $productos = Producto::find($producto->id);
        $productos->delete();
        return redirect('/productos');
    }
}
