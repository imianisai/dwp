<?php

namespace App\Http\Controllers;
use App\Models\Producto;

use Illuminate\Http\Request;

class ProductosController extends Controller
{
    Public function create(){
        return view('productos.create');
    }

    public function index(){
        $productos = Producto::all();
        return view('productos.index', compact('productos'));
    }

    public function store(Request $request){
        $producto = new Producto();
        $producto->codigo = request('codigo');
        $producto->nombre = request('nombre');
        $producto->precio = request('precio');      
        $producto->existencia = request('existencia');
        $producto->save();

        return redirect()->route('productos');
    }

    public function delete($id){
        $producto = Producto::find($id);
        $producto->delete();

        return redirect()->route('productos');
    }   

}
