
@extends('layouts.app')

@section('title', 'Crear Examen')

@section('content')

<div class="block mx-auto my-12 p-8 bg-white w-1/3 border border-gray-200 
rounded-lg shadow-lg">

  <h1 class="text-3xl text-center font-bold">Examenes</h1>

  <form class="mt-4" method="POST" action="">
    @csrf
      
    <div class="flex justify-center">
        <div class="mb-3 xl:w-96">
          <select class="form-select appearance-none
            block
            w-full
            px-3
            py-1.5
            text-base
            font-normal
            text-gray-700
            bg-white bg-clip-padding bg-no-repeat
            border border-solid border-gray-300
            rounded
            transition
            ease-in-out
            m-0
            focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" aria-label="Default select example"
             id="opcion" name="mi_select">
              @foreach ($examenes as $examen)
            @if(Auth::user()->id == $examen->id_usuario) 
              <option value="{{$examen->id}}">{{$examen->nombre}}</option>
              @endif
              @endforeach
          </select>
        </div>
      </div>

    <button type="submit" class="rounded-md bg-indigo-500 w-full text-lg
    text-white font-semibold p-2 my-3 hover:bg-indigo-600">Ir a preguntas</button>
  </form>
</div>

@endsection