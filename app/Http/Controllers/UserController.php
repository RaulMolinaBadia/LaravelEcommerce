<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
{
    $usuarios = User::all();
    return view('usuarios.index', compact('usuarios'));
}

public function create()
{
    return view('usuarios.create');
}

public function store(Request $request)
{
    $usuario = new User();
    $usuario->name = $request->input('name');
    $usuario->email = $request->input('email');
    $usuario->password = bcrypt($request->input('password'));
    $usuario->save();

    return redirect('/usuarios');
}

public function show($id)
{
    $usuario = User::find($id);
    return view('usuarios.show', compact('usuario'));
}

public function edit($id)
{
    $usuario = User::find($id);
    return view('usuarios.edit', compact('usuario'));
}

public function update(Request $request, $id)
{
    $usuario = User::find($id);
    $usuario->name = $request->input('name');
    $usuario->email = $request->input('email');
    $usuario->password = bcrypt($request->input('password'));
    $usuario->save();

    return redirect('/usuarios');
}

public function destroy(Request $request, $id)
{
    $usuario = User::find($id);
    $usuario->delete();

    return redirect('/usuarios');
}

}
