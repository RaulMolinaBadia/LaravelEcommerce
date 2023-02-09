<?php

use App\Http\Controllers\AppController;
use Illuminate\Support\Facades\Route;

Route::get('/', [AppController::class,'index']);
Route::get('/form', [AppController::class,'procesar']);
Route::get('/productos', [AppController::class,'verProductos']);
Route::get('/busca', [AppController::class,'busca']);
