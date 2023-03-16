<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\CartController;


// PRODUCTOS
Route::get('/productos', [ProductosController::class, 'index']);
Route::get('/productos/create', [ProductosController::class, 'create'])->middleware('CheckRoleUser');
Route::post('/productos', [ProductosController::class, 'store']);
Route::get('/productos/{id}', [ProductosController::class, 'show']);
Route::get('/productos/{id}/edit', [ProductosController::class, 'edit'])->middleware('CheckRoleUser');
Route::put('/productos/{id}', [ProductosController::class, 'update'])->middleware('CheckRoleUser');
Route::get('/productos/{id}/delete', [ProductosController::class, 'destroy'])->middleware('CheckRoleUser');

// CATEGORIAS
Route::get('/categorias', [CategoriaController::class, 'index']);
Route::get('/categorias/create', [CategoriaController::class, 'create'])->middleware('CheckRoleUser');
Route::post('/categorias', [CategoriaController::class, 'store']);
Route::get('/categorias/{id}', [CategoriaController::class, 'show']);
Route::get('/categorias/{id}/edit', [CategoriaController::class, 'edit'])->middleware('CheckRoleUser');
Route::put('/categorias/{id}', [CategoriaController::class, 'update'])->middleware('CheckRoleUser');
Route::get('/categorias/{id}/delete', [CategoriaController::class, 'destroy'])->middleware('CheckRoleUser');

// CART
Route::get('cart', [CartController::class, 'cartList'])->name('cart.list');
Route::post('cart', [CartController::class, 'addToCart'])->name('cart.store');
Route::post('update-cart', [CartController::class, 'updateCart'])->name('cart.update');
Route::post('remove', [CartController::class, 'removeCart'])->name('cart.remove');
Route::post('clear', [CartController::class, 'clearAllCart'])->name('cart.clear');

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [ProductosController::class, 'index']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
