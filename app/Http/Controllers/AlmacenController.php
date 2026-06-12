<?php

namespace App\Http\Controllers;

use App\Models\Almacen;
use Illuminate\Http\Request;

class AlmacenController extends Controller
{
    public function index()
    {
        $almacenes = Almacen::all();

        return view('productos.almacen', compact('almacenes'));
    }

    public function create()
    {
        $almacen = new Almacen();
        $almacen->id = 0;

        return view('productos.create_almacen', compact('almacen'));
    }

    public function edit($id)
    {
        $almacen = Almacen::findOrFail($id);

        return view('productos.create_almacen', compact('almacen'));
    }

    public function store(Request $request)
    {
        if ($request->id == 0) {
            $almacen = new Almacen();
        } else {
            $almacen = Almacen::findOrFail($request->id);
        }

        $almacen->codigo = $request->codigo;
        $almacen->nombre = $request->nombre;
        $almacen->save();

        return redirect()->route('almacenes.index');
    }

    public function delete($id)
    {
        $almacen = Almacen::findOrFail($id);
        $almacen->delete();

        return redirect()->route('almacenes.index');
    }
}