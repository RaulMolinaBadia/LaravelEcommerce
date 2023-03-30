<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function index()
    {
        $categorias = Categoria::all();
        return view('categorias.index', compact('categorias'));
    }

    public function create()
    {
        $categorias = Categoria::all();
        return view('categorias.create', compact('categorias'));
    }

    public function store(Request $request)
    {
        $categorias = new Categoria();
        $categorias->nombre = $request->input('nombre');
        $categorias->save();

        return redirect('/categorias');
    }

    public function show($id)
    {
        $categorias = Categoria::find($id);
        return view('categorias.show', compact('categorias'));
    }
    
    public function edit($id)
    {
        $categorias = Categoria::find($id);
        // $categorias = Categoria::all();
        return view('categorias.edit', compact('categorias'));
    }

    public function update(Request $request, $id)
    {
        $categorias = Categoria::find($id);
        $categorias->nombre = $request->input('nombre');
        $categorias->save();

        return redirect('/categorias');
    }

    public function destroy(Request $producto)
    {
        $categorias = Categoria::find($producto->id);
        $categorias->delete();
        return redirect('/categorias');
    }

    public function getCategories()
    {
        $categorias = Categoria::all();
        return $categorias;
    }
}
