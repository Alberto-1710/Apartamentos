<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear nuevo dueño</title>
</head>
<body>

                    <h2>Crear Nueva Dueño</h2>
                    <br>
                    <form action='{{route('duenio.store')}}' method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="nombre">Nombre:</label>
                            <input type="text" class="form-control" name="nombre" id="nombre"/>
                        </div>
                        <div class="form-group">
                            <label for="apellido">Apellido:</label>
                            <input type="text"class="form-control" name="apellido"/>
                        </div>
                        <div class="form-group">
                            <label for="correo">Correo:</label>
                            <input type="text" class="form-control" name="correo"/>
                        </div>
                        <div>
                            <button type="submit" class="btn btn-success">Guardar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
    </html>