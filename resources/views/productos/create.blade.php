@extends('adminlte::page')

@section('title', 'Producto nuevo')

@section('content_header')
    <h1>Nuevo producto</h1>
@stop

@section('content')
    <form action="{{ route('productos.guardar') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="codigo">Código:</label>
            <input type="text" name="codigo" id="codigo" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" id="nombre" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="precio">Precio:</label>
            <input type="number"  name="precio" id="precio" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="existencia">Existencia:</label>
            <input type="number"  name="existencia" id="existencia" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop