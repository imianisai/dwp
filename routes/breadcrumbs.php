<?php

use Diglactic\Breadcrumbs\Breadcrumbs;
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

/*
|--------------------------------------------------------------------------
| Home
|--------------------------------------------------------------------------
*/

Breadcrumbs::for('home', function (BreadcrumbTrail $trail) {
    $trail->push('Inicio', route('home'));
});

/*
|--------------------------------------------------------------------------
| Productos
|--------------------------------------------------------------------------
*/

// Inicio / Productos
Breadcrumbs::for('productos', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Productos', route('productos'));
});

// Inicio / Productos / Nuevo
Breadcrumbs::for('productos.nuevo', function (BreadcrumbTrail $trail) {
    $trail->parent('productos');
    $trail->push('Nuevo', route('productos.nuevo'));
});

// Inicio / Productos / Editar
Breadcrumbs::for('productos.editar', function (BreadcrumbTrail $trail, $id) {
    $trail->parent('productos');
    $trail->push('Editar', route('productos.editar', $id));
});

/*
|--------------------------------------------------------------------------
| Almacenes
|--------------------------------------------------------------------------
*/

// home 
Breadcrumbs::for('almacenes.index', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Almacenes', route('almacenes.index'));
});

// Inicio / Almacenes / Nuevo
Breadcrumbs::for('almacenes.nuevo', function (BreadcrumbTrail $trail) {
    $trail->parent('almacenes.index');
    $trail->push('Nuevo', route('almacenes.nuevo'));
});

// Inicio / Almacenes / Editar
Breadcrumbs::for('almacenes.editar', function (BreadcrumbTrail $trail, $id) {
    $trail->parent('almacenes.index');
    $trail->push('Editar', route('almacenes.editar', $id));
});