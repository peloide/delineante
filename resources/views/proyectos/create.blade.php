@extends('layouts.plantilla')

@section('infoGeneral')
<div class="flex-center position-ref full-height">
    <div class="content">
        <h1 class="py-0">CREAR PELICULA</h1>

        @if($errors->any())
            <div class="alert alert-danger text-left">
                @foreach($errors->all() as $error)
            <li>{{$error}}</li>
                @endforeach
            </div>
        @endif

        <form action="{{ route('proyectos.store') }}" method="POST" style="display:inline">
            @csrf

            <div class="form-group">
                <label for="nombre_proyecto">Nombre proyecto</label>
                <input type="text" name="nombre_proyecto" id="nombre_proyecto" class="form-control">
            </div>

            <div class="form-group">
                <label for="tipo">Tipo</label>
                <select class="form-control" name="tipo" id="tipo">
                    <option value="accion">accion</option>
                    <option value="aventura">aventura</option>
                    <option value="drama">drama</option>
                    <option value="dibujos">dibujos</option>
                    <option value="belica">bélica</option>
                    <option value="ciencia ficcion">ciencia ficcion</option>
                    <option value="comedia">comedia</option>
                </select>
                <!--
                <input type="text" name="genero" id="genero" class="form-control"> -->
            </div>

            <div class="form-group">
                <label for="descripcion">Descripción</label>
                <input type="text" name="descripcion" id="descripcion" class="form-control">
            </div>

            <div class="form-group">
                <label for="imagen">Imagen</label>
                <input type="text" name="imagen" id="imagen" class="form-control">
            </div>

            <div class="form-group">
                <label for="precio">Precio</label>
                <input type="text" name="precio" id="precio" class="form-control">
            </div>

            <a href="">
                <button class="btn btn-info m-6">CREAR</button>
                </a>
            </div>

            
        </form>
        <a href="{{ route('proyectos.index')}}">
            <button class="btn btn-success m-2">Volver</button>
        </a>
    
    </div>
</div>
    
@endsection