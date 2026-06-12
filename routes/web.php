<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\AlmacenController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

/*
|--------------------------------------------------------------------------
| Productos
|--------------------------------------------------------------------------
*/
Route::get('/productos', [ProductosController::class, 'index'])->name('productos');
Route::get('/productos/nuevo', [ProductosController::class, 'create'])->name('productos.nuevo');
Route::get('/productos/editar/{id}', [ProductosController::class, 'edit'])->name('productos.editar');
Route::post('/productos/guardar', [ProductosController::class, 'store'])->name('productos.guardar');
Route::delete('/productos/eliminar/{id}', [ProductosController::class, 'delete'])->name('productos.eliminar');

/*
|--------------------------------------------------------------------------
| Almacén
|--------------------------------------------------------------------------
*/
Route::get('/almacenes', [App\Http\Controllers\AlmacenController::class, 'index'])->name('almacenes.index');
Route::get('/almacenes/nuevo', [App\Http\Controllers\AlmacenController::class, 'create'])->name('almacenes.nuevo');
Route::get('/almacenes/editar/{id}', [App\Http\Controllers\AlmacenController::class, 'edit'])->name('almacenes.editar');
Route::post('/almacenes/guardar', [App\Http\Controllers\AlmacenController::class, 'store'])->name('almacenes.guardar');
Route::delete('/almacenes/eliminar/{id}', [App\Http\Controllers\AlmacenController::class, 'delete'])->name('almacenes.eliminar');