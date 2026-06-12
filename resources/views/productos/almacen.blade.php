@extends('adminlte::page')

@section('title', 'Almacenes')

@section('content_header')
    <h1>Almacenes</h1>
     {{ Breadcrumbs::render('almacenes.index') }}
@stop

@section('content')

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Código</th>
                <th>Nombre</th>
                <th>Acciones</th>
            </tr>
        </thead>

        <tbody>
            @foreach($almacenes as $almacen)
                <tr>
                    <td>{{ $almacen->codigo }}</td>
                    <td>{{ $almacen->nombre }}</td>
                    <td>
                        <a href="{{ route('almacenes.editar', $almacen->id) }}" class="btn btn-primary">
                            Editar
                        </a>

                        <form action="{{ route('almacenes.eliminar', $almacen->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-danger">
                                Eliminar
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@stop