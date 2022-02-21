<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('inicio');
})->name('inicio');

Route::get('/login', function () {
    return "<h1>Inicio de sesión exitoso <hr></h1>";
});

Route::get('/empresario_1', function () {
    return view('tienda_emprendedor');
})->name('tienda_emprendedor');

Route::get('/empresario_1/producto_de_prueba', function () {
    return view('vista_producto');
});
