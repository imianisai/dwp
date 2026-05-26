<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/productos', [App\Http\Controllers\ProductosController::class, 'index'])->name('productos');
Route::get('/productos/nuevo', [App\Http\Controllers\ProductosController::class, 'create'])->name('productos.nuevo');
Route::post('/productos/guardar', [App\Http\Controllers\ProductosController::class, 'store'])->name('productos.guardar');
Route::delete('/productos/eliminar/{id}', [App\Http\Controllers\ProductosController::class, 'delete'])->name('productos.eliminar');