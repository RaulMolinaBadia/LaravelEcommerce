<?php

use App\Http\Controllers\AppController;
use App\Http\Controllers\userController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Route::get('/', [AppController::class,'index']);
Route::get('/form', [AppController::class,'procesar']);
Route::get('/productos', [AppController::class,'verProductos']);
Route::get('/busca', [AppController::class,'busca']);

// Route::get('/loginForm', [userController::class,function () {
//     return view('loginForm');
// }]);
// Route::post('/login', [userController::class,'login']);
// Route::get('/logout', [userController::class,'logout']);

Route::get('/', function () {
    return view('welcome');
});
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';