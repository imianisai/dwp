@extends('adminlte::page')

@section('title', 'home')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <p>Isai Martinez Perafan</p>
@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop