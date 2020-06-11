<?php

use App\Articulo;
use App\Proyecto;
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
// Rutas Paginas COntroller
Route::get('/', 'PaginasController@inicio')->name('inicio');
Route::get('/inicio', 'PaginasController@inicio');
Route::get('/contacto', 'PaginasController@contacto')->name('contacto');
Route::get('/mostrar', 'PaginasController@mostrar');



// RUTAS DE LOS PROYECTOS
Route::get('/proyectos', 'ProyectosController@index')->name('proyectos.index'); // Muestra todos los proyectos
Route::delete('/proyectos/{proyecto}', 'ProyectosController@destroy')->name('proyectos.destroy'); // Borra el proyecto seleccionado
Route::get('/proyecto/{proyecto}', 'ProyectosController@show')->name('proyecto.show'); // Mostrar el proyecto seleccionado
Route::post('proyectos/crear', 'ProyectosController@store')->name('proyectos.store');
Route::get('/proyectos/crear', 'ProyectosController@create')->name('proyectos.crear');

// RUTAS PARA BORRAR EJEMPLO ARTICULO
Route::get("/leer", function(){
    $articulos=Articulo::all();
    foreach($articulos as $articulo){
        echo $articulo->titulo;
    }

});



Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');










