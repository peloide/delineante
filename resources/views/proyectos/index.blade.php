@extends('layouts.plantilla')

@section('infoGeneral')

@forelse ($proyectos as $proyecto)

<h1>Hola Jorge</h1>
<div class="m-1 col-12 col-xs-5 col-sm-6 col-lg-4 col-xl-3 p-2">
<div class=" card d-flex align-items-center" style="width: 18rem;">
    <img src="https://picsum.photos/64/64" class="card-img-top" alt="...">
    <div class="card-body">
    <h5 class="card-title  d-flex align-item-center">{{ $proyecto->nombre_proyecto }}</h5>
    <h1>Jorge</h1>
      
    <a href=" {{ route('proyecto.show',$proyecto) }}" class="btn btn-primary align-item-center">Detalles</a>
    </div>
  </div>
</div>
    
@empty
    
@endforelse

    
@endsection