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
              <th style="width: 100px">Id Pregunta</th>
              <th style="width: 100px">Pregunta</th>
              <th style="width: 100px">Opcion 1</th>
              <th style="width: 100px">Opcion 2</th>
              <th style="width: 100px">opcion 3</th>
              <th style="width: 100px">Correcto</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($preguntas as $pregunta)
            <tr>
              <td style="background-color: coral; text-align: center">{{$pregunta->id}}</td>
              <td style="background-color: coral; text-align: center">{{$pregunta->pregunta}}</td>
              <td style="background-color: coral; text-align: center">{{$pregunta->opcion1}}</td>
              <td style="background-color: coral; text-align: center">{{$pregunta->opcion2}}</td>
              <td style="background-color: coral; text-align: center">{{$pregunta->opcion3}}</td>
              <td style="background-color: coral; text-align: center">{{$pregunta->correcta}}</td>
            </tr>
            @endforeach
          </tbody>
        </table>

     
      
        
        
</body>
</html>