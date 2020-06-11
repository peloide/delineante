@extends('layouts.plantilla')

@section('infoGeneral')

<div class="jumbotron jumbotron-fluid mt-4">
    <div class="container">
      <h1 class="display-4">{{$proyecto->nombre_proyecto}}</h1>
      <p class="lead">{{$proyecto->descripcion}}</p>
    </div>
  </div>

  
    
@endsection