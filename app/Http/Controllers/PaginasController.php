<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/**
 * Controlador que maneja las diferentes páginas de nuestro sitio web
 */
class PaginasController extends Controller
{
    //
    public function inicio() {
        return view('/paginas/inicio');
    }

    public function proyectos(){
        return view('/paginas/proyectos');
    }

    public function contacto(){
        return view('/paginas/contacto');
    }

    public function mostrar(){
        //$personas = [];
        $personas = ['Luis', 'Andrés', 'Jorge', 'Pablo', 'Helena'];
        return view('/paginas/mostrar', compact('personas'));
    }

   
}
