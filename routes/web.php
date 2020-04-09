<?php
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

Route::get('/', 'PaginasController@inicio')->name('inicio');
Route::get('/inicio', 'PaginasController@inicio');
Route::get('/proyectos', 'PaginasController@proyectos')->name('proyectos');
Route::get('/contacto', 'PaginasController@contacto')->name('contacto');
Route::get('/mostrar', 'PaginasController@mostrar');

/*
Route::get("leer", function(){

    $proyectos = Proyecto::all();

    foreach($proyectos as $proyecto){
        echo '<p>';
        echo 'nombre: ' .$proyecto->nombre_proyecto .' -> tipo: ' .$proyecto->tipo;
        echo '</p>';
    }
});
*/

Route::get('leer', function () {

    $proyectos = Proyecto::where('tipo', 'madera')->get();
    foreach($proyectos as $proyecto){
        /*echo '<p>';
        echo 'nombre: ' .$proyecto->nombre_proyecto .' -> tipo: ' .$proyecto->tipo;
        echo '</p>';
    */
    return $proyectos;
    }

    
});

Route::get('/insertar', function () {

    $proyectos = new Proyecto;

    $proyectos->nombre_proyecto="Casa de madera";
    $proyectos->tipo="tipo";
    $proyectos->descripcion="Casa de madera de roble con tejado de pizarra y remates en caoba";
    $proyectos->imagen="casa1.jpg";
    $proyectos->precio="17.500";
    $proyectos->seccion="casas";

    $proyectos->save();
    
});

/*
Route::get('/actualizar', function () {

    $proyectos = Proyecto::find(7);

    $proyectos->nombre_proyecto="Casa de madera";
    $proyectos->tipo="tipo";
    $proyectos->descripcion="Casa de madera de roble con tejado de pizarra y remates en caoba";
    $proyectos->imagen="casa1.jpg";
    $proyectos->precio="30000";
    $proyectos->seccion="casas";

    $proyectos->save();
    
});
*/

Route::get('/actualizar', function () {

    Proyecto::where('seccion', 'carbon')->update(['seccion'=>'frutal']);
    
});

Route::get('/borrar', function () {

    Proyecto::where('seccion', 'casas')->delete();
    
});



// Nos genera todas las rutas
// Route::resource('post', 'Ejemplo3Controller');

