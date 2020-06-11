@extends('layouts.plantilla')

@section("cabecera")


@endsection



@section('infoGeneral')

<h2>tabla con personal</h2>

@if (count($personas))
    <table>
      @foreach ($personas as $persona)

      <tr>
        <td>{{ $persona }}</td>
      </tr>
          
      @endforeach
    </table>

    @else
    {{ "Sin alumnos "}}

@endif

    
@endsection

@section('footer')
    
@endsection