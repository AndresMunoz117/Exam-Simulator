<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title') - Laravel App</title>
    
    <!-- Tailwind CSS Link -->
    <link rel="stylesheet" 
    href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.1/tailwind.min.css">
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> --}}
  

  </head>
  <body class="bg-gray-900 text-gray-800">
    <!-- This example requires Tailwind CSS v2.0+ -->
<nav class="bg-gray-800">
    <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
      <div class="relative flex items-center justify-between h-16">
        
        {{-- Foto y nombre --}}
        <div class="flex-1 flex items-center justify-center sm:items-stretch sm:justify-start">
          <div class="flex-shrink-0 flex items-center">
            {{-- <img class="block lg:hidden h-8 w-auto" src="https://tailwindui.com/img/logos/workflow-mark-indigo-500.svg" alt="Workflow"> --}}
            {{-- <img src="https://web.whatsapp.com/fd47adef-0be8-42cc-9415-74db7befd763" alt="Workflow"> --}}
          </div> 
          @if(auth()->check())
          <div class="flex-shrink-0 flex items-center">
            {{-- Comenzamos con la validacion de la navbar que sera del docente --}}
            @if(Auth::user()->tipoUsuario == 'Docente')
            <p class="text-xl pl-20 text-white">Bienvenido docente <b> {{ Auth::user()->nombre }}</b></p>
            @else
            {{-- Comenzamos con la validacion de la navbar que sera del docente --}}
            <p class="text-xl pl-20 text-white">Bienvenido alumno <b> {{ Auth::user()->nombre }}</b></p>
            @endif
          </div> 
        </div>

        @if(Auth::user()->tipoUsuario == 'Docente')
        {{-- Menu del nav --}}
        <div class="hidden sm:block sm:ml-6">
          <div class="flex space-x-4">
            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
            <a href="{{route('dashboard.maestro')}}" class="bg-gray-900 text-white px-3 py-2 rounded-md text-sm font-medium" aria-current="page">Inicio</a>
            <a href="{{route('examen.docente')}}" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Examenes</a>
            <a href="{{route('reporte.docente')}}" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Reportes</a>
          </div>
        </div>

        {{-- Cerrar sesion --}}
      <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
        <div class="ml-3 relative">
          <div>
              <a href="{{ route('login.destroy')}}" class="font-bold
              py-2 px-4 rounded-md bg-red-600 hover:bg-red-700 
              hover:text-white text-white">Salir</a>
          </div>
        </div>

      </div>
     
        @else
        {{-- Menu del nav --}}
        <div class="hidden sm:block sm:ml-6">
          <div class="flex space-x-4">
            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
            <a href="{{route('dashboard.maestro')}}" class="bg-gray-900 text-white px-3 py-2 rounded-md text-sm font-medium" aria-current="page">Inicio</a>
            <a href="{{route('examen.alumno')}}" class="bg-gray-900 text-white px-3 py-2 rounded-md text-sm font-medium" aria-current="page">Examenes</a>
            <a href="{{route('reporte.alumno')}}" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Reportes</a>
          </div>
        </div>

        {{-- Cerrar sesion --}}
      <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
        <div class="ml-3 relative">
          <div>
              <a href="{{ route('login.destroy')}}" class="font-bold
              py-2 px-4 rounded-md bg-red-600 hover:bg-red-700 
              hover:text-white text-white">Salir</a>
          </div>
        </div>

      </div>

        @endif

        @else
        {{-- Si no esta logueado se le mostrara la siguiente nav bar --}}
        <ul class="w-1/2 px-16 ml-auto flex justify-end pt-1">
        <li class="mx-6">
          <a href="{{ route('login.index') }}" class="font-semibold 
          hover:bg-indigo-700 py-3 px-4 rounded-md text-white">Iniciar Sesion</a>
        </li>
        <li>
          <a href="{{ route('register.index') }}" class="font-semibold
          border-2 border-white py-2 px-4 rounded-md hover:bg-white 
          hover:text-indigo-700 text-white">Registrar</a>
        </li>
        </ul>
        
        @endif
      </div>
    </div>
  
  </nav>
    @yield('content')


  </body>
</html>