@extends('layouts.app')

@section('title', 'Home')

@section('content')

<div class="w-3/4 m-auto pt-10">
  <a href="{{route('verPdf')}}"class="rounded-md bg-red-600 w-full text-lg
  text-white font-semibold p-2 my-3 hover:bg-red-700">Crear PDF</a>
  <table class="table-auto bg-white m-auto">
    <thead>
      <tr>
        <th>Id Resultado</th>
        <th>Alumno</th>
        <th>Examen</th>
        <th>Intentos</th>
        <th>Promedio</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($resultados as $resultado)
      <tr>
        <td>{{$resultado->id}}</td>
        <td>{{$resultado->alumno}}</td>
        <td>{{$resultado->tituloExamen}}</td>
        <td>{{$resultado->intentos}}</td>
        <td>{{$resultado->promedio}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

<div class="w-3/4 m-auto pt-10">

  <table class="table-auto bg-white m-auto">
    <thead>
      <tr>
        <th>Id Resultado</th>
        <th>Calificacion</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($calificaciones as $calificacion)
      <tr>
        <td>{{$calificacion->idResultado}}</td>
        <td>{{$calificacion->calificacion}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
  
  @endsection