@extends('adminlte::page')

@section('title', 'Almacén')

@section('content_header')
    <h1>{{ $almacen->id == 0 ? 'Nuevo almacén' : 'Editar almacén' }}</h1>
     {{ Breadcrumbs::render('almacenes.editar', $almacen->id) }}
@stop

@section('content')

    <form action="{{ route('almacenes.guardar') }}" method="POST">
        @csrf

        <input type="hidden" name="id" value="{{ $almacen->id }}">

        <div class="form-group">
            <label for="codigo">Código</label>
            <input 
                type="text" 
                name="codigo" 
                id="codigo" 
                class="form-control"
                value="{{ $almacen->codigo }}"
                required
            >
        </div>

        <div class="form-group">
            <label for="nombre">Nombre del almacén</label>
            <input 
                type="text" 
                name="nombre" 
                id="nombre" 
                class="form-control"
                value="{{ $almacen->nombre }}"
                required
            >
        </div>

        <button type="submit" class="btn btn-success">
            Guardar
        </button>

        <a href="{{ route('almacenes.index') }}" class="btn btn-secondary">
            Cancelar
        </a>
    </form>

@stop