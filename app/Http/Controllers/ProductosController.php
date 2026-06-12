<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductosController extends Controller
{
    public function create()
    {
        $producto = new Producto();
        $producto->id = 0;

        return view('productos.create', compact('producto'));
    }

    public function edit($id)
    {
        $producto = Producto::findOrFail($id);

        return view('productos.create', compact('producto'));
    }

    public function index()
    {
        $productos = Producto::all();

        return view('productos.index', compact('productos'));
    }

    public function store(Request $request)
    {
        if ($request->id == 0) {
            $producto = new Producto();
        } else {
            $producto = Producto::findOrFail($request->id);
        }

        $producto->codigo = $request->codigo;
        $producto->nombre = $request->nombre;
        $producto->precio = $request->precio;
        $producto->existencia = $request->existencia;
        $producto->save();

        return redirect()->route('productos');
    }

    public function delete($id)
    {
        $producto = Producto::findOrFail($id);
        $producto->delete();

        return redirect()->route('productos');
    }
}