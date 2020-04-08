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


// RUTAS DEL SITIO WEB

Route::get('/', 'PaginasController@inicio')->name('inicio');
Route::get('/inicio', 'PaginasController@inicio');
Route::get('/proyectos', 'PaginasController@proyectos')->name('proyectos');
Route::get('/contacto', 'PaginasController@contacto')->name('contacto');
Route::get('/mostrar', 'PaginasController@mostrar');


// Nos genera todas las rutas
// Route::resource('post', 'Ejemplo3Controller');

