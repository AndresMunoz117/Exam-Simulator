<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reporte de calificaciones</title>
</head>
<body>
    <h1 style="margin: auto; text-align: center; color: orange">PDF de resultados de su materia</h1>
        <table border="1px solid" style="margin: auto">
          <thead>
            <tr style="background-color: beige">
              <th style="width: 100px">Id Resultado</th>
              <th style="width: 100px">Alumno</th>
              <th style="width: 100px">Examen</th>
              <th style="width: 100px">Intentos</th>
              <th style="width: 100px">Promedio</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($resultados as $resultado)
            <tr>
              <td style="background-color: coral; text-align: center">{{$resultado->id}}</td>
              <td style="background-color: coral; text-align: center">{{$resultado->alumno}}</td>
              <td style="background-color: coral; text-align: center">{{$resultado->tituloExamen}}</td>
              <td style="background-color: coral; text-align: center">{{$resultado->intentos}}</td>
              <td style="background-color: coral; text-align: center">{{$resultado->promedio}}</td>
            </tr>
            @endforeach
          </tbody>
        </table>

     
      
        <table border="1px solid" style="margin: auto; margin-top: 10px">
          <thead>
            <tr style="background-color: beige">
              <th style="width: 100px">Id Resultado</th>
              <th style="width: 100px">Calificacion</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($calificaciones as $calificacion)
            <tr>
              <td style="background-color: coral; text-align: center">{{$calificacion->idResultado}}</td>
              <td style="background-color: coral; text-align: center">{{$calificacion->calificacion}}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
      
        
</body>
</html>