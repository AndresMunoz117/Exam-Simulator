@extends('layouts.app')

@section('title', 'Home')

@section('content')
  <div>
    <h1 class="text-5xl text-center pt-24 text-blue-400	">Bienvenido maestro {{Auth::user()->nombre}}</h1>

  </div>
      
@endsection