<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\MasterController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ManageController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StripePaymentController;

Route::get('/', [ProductosController::class, 'index'])->name('home');
// PRODUCTOS
Route::get('/productos', [ProductosController::class, 'index'])->name('productos');
Route::get('/productos/create', [ProductosController::class, 'create'])->middleware('CheckRoleUser');
Route::post('/productos', [ProductosController::class, 'store']);
Route::get('/productos/{id}', [ProductosController::class, 'show'])->name('specificProduct');
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

// USERS
Route::get('/usuarios', [UserController::class, 'index'])->middleware('CheckRoleUser');
Route::get('/usuarios/create', [UserController::class, 'create'])->middleware('CheckRoleUser');
Route::post('usuarioss', [UserController::class, 'store'])->middleware('CheckRoleUser');
Route::get('/usuarios/{id}', [UserController::class, 'show'])->middleware('CheckRoleUser');
Route::get('/usuarios/{id}/edit', [UserController::class, 'edit'])->middleware('CheckRoleUser');
Route::put('/usuarios/{id}', [UserController::class, 'update'])->middleware('CheckRoleUser');
Route::get('/usuarios/{id}/delete', [UserController::class, 'destroy'])->middleware('CheckRoleUser');


Route::get('/', [ProductosController::class, 'index']);

Route::get('/dashboard', [MasterController::class, 'index'])->middleware('CheckRoleUser')->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::controller(StripePaymentController::class)->group(function () {
    Route::get('/stripe/{price}', [StripePaymentController::class, 'stripe'])->name('stripe.index');
    Route::post('stripe', [StripePaymentController::class, 'stripePost'])->name('stripe.post');
});

require __DIR__ . '/auth.php';
