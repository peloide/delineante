@extends('layouts.plantilla')
@section('cabecera')

<a href="{{ route('proyectos.crear')}}">
  <button class="btn btn-warning">Crear</button>
</a>
    
@endsection

@section('infoGeneral')

@forelse ($proyectos as $proyecto)


<div class="m-1 col-xs-12 col-sm-6 col-lg-4 col-xl-3 p-2">
<div class=" card d-flex align-items-center" style="width: 18rem;">
    <img src="https://picsum.photos/64/64" class="card-img-top" alt="...">
    <div class="card-body">
    <h5 class="card-title  d-flex align-item-center">{{ $proyecto->nombre_proyecto }}</h5>
      
      <a href="{{ route('proyecto.show',$proyecto) }}" class="btn btn-primary align-item-center">Detalles</a>

      <!-- Botón de borrar proyecto -->
      <form class="my-2" action="{{ action('ProyectosController@destroy', $proyecto) }}" method="POST">
          @csrf
          @method('DELETE')
          <input class="btn btn-danger" value="Borrar" type="submit">  
      </form>



    </div>
  </div>
</div>
    
@empty
    
@endforelse

    
@endsection