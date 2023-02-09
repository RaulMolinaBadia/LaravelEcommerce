<?php

use App\Http\Controllers\AppController;
use App\Http\Controllers\userController;
use Illuminate\Support\Facades\Route;

Route::get('/', [AppController::class,'index']);
Route::get('/form', [AppController::class,'procesar']);
Route::get('/productos', [AppController::class,'verProductos']);
Route::get('/busca', [AppController::class,'busca']);

Route::get('/loginForm', [userController::class,function () {
    return view('loginForm');
}]);
Route::post('/login', [userController::class,'login']);
Route::get('/logout', [userController::class,'logout']);