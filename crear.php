hola desde crear
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="guardar_persona.php" method="post">
        <div>
            <h3>Crear Usuario</h3>
        </div>
        <div class="form-group">
            <label for="">Nombre</label><br>
            <input type="text" name="nombre">
        </div>

        <div class="form-group">
            <label for="">Email</label><br>
            <input type="text" name="email">
        </div>

        <div>
            <button type="submit">GUARDAR</button>
           
        </div>
    </form>
    <form action="index.php"><button type="submit">INICIO</button></form>
</body>
</html>