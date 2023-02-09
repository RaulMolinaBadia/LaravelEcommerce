<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class AppController extends Controller
{
    function index()
    {
        return view('welcome');
    }

    function procesar(Request $r)
    {
        
        return view('welcome', ['nombre' => $r->texto]);
    }
    function verProductos()
    {
        $p = Producto::all();
        return view('productos', ['productos' => $p]);
    }

    function busca(Request $r)
    {
        $p = Producto::where('nombre', $r->texto)->get();
        return view('busca', ['productos' => $p]);
    }
}
