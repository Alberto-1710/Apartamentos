<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tabla Propiedades</title>
</head>
<body>
    <div>
        <h1>Propiedades</h1>
        <br>
        <br>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Piso</th>
                    <th>Area</th>
                    <th>Color</th>
                    <th>IdDuenio</th>
                </tr>
            </thead>
            <body>
                @foreach ($propiedades as $propiedad)
                    <tr>
                        <td>{{ $propiedad->id }}</td>
                        <td>{{ $propiedad->piso }}</td>
                        <td>{{ $propiedad->area }}</td>
                        <td>{{ $propiedad->color }}</td>
                        <td>{{ $propiedad->idDuenio }}</td>
                    </tr>
                @endforeach
               
            </body>
        </table>

    </div>
</body>
</html>