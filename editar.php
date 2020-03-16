<?php
    include("includes/db.php");
    if(isset($_GET["id"])==false){
        echo "Es necesario enviar un ID";
        die;
    }
    $id=$_GET["id"];
    $sql="select * from persona where id=$id";
    $persona=DB::query($sql);
    //var_dump($persona);//de que tipo es, que variable es
    $persona=mysqli_fetch_object($persona);//combierte a objeto
    if($persona==false){
        echo "El usuario no exite";
        die;
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
</head>
<body>
    <form action="modificar_persona.php" method="post">
        <div>
            <h3>Editar Usuario</h3>
        </div>
        <div class="form-group">
            <input type="hidden" name="id" value="<?= $persona->id?>">
        </div>
        <div class="form-group">
            <label for="">Nombre</label><br>
            <input type="text" name="nombre" value="<?=$persona->nombre?>">
        </div>

        <div class="form-group">
            <label for="">Email</label><br>
            <input type="text" name="email" value="<?=$persona->email?>">
        </div>

        <div>
            <br>
            <button type="submit">Guardar</button>
        </div>
    </form>
    <form action="index.php"><button type="submit">Incio</button></form>
</body>
</html>