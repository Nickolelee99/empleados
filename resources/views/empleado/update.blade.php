<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Empleado</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Actualizar Empleado</h2>
        <form action="{{ route('empleados.update', $empleados->id) }}" method="post">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" value="{{ old('nombre', $empleados->nombre) }}" required>                
            </div>

            <div class="form-group">
                <label for="descripcion">Apellido</label>
                <input type="text" class="form-control" id="descripcion" name="descripcion" value="{{ old('descripcion', $empleados->descripcion) }}" required>
            </div>

            <div class="form-group">
                <label for="creditos">Cargo</label>
                <input type="text" class="form-control" id="creditos" name="creditos" value="{{ old('creditos', $empleados->creditos) }}" required>
            </div>


            <button type="submit" class="btn btn-primary mt-3">Actualizar</button>
            <a href="{{ route('empleados.index') }}" class="btn btn-primary">Volver</a>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
