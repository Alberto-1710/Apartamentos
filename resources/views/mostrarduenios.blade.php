<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tabla de Dueños</title>
</head>
<body>
    <div>
        <h1>Dueños</h1>
        <br>
        <br>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>correo</th>
                </tr>
            </thead>
            <body>
                @foreach ($duenios as $duenio)
                    <tr>
                        <td>{{ $duenio->id }}</td>
                        <td>{{ $duenio->nombre }}</td>
                        <td>{{ $duenio->apellido }}</td>
                        <td>{{ $duenio->correo }}</td>
                    </tr>
                @endforeach
               
            </body>
        </table>

    </div>
</body>
</html>