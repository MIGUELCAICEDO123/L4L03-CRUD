<?php
    include("includes/db.php");
    $sql="select * from persona";
    $result=DB::query($sql);//--> mysqli_query($con,$query)
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<body>
    <form>
    <table border="1" cellspacing="0" cellpadding="3" >
        <tr style="background-color: violet">
            <td>id</td>
            <td>nombre</td>
            <td>email</td>
            <td>crud</td>
        </tr>
        <tr >
            <?php
            while($mostrar=mysqli_fetch_array($result)){
            ?>
            <td><?php echo $mostrar['id']?></td>
            <td><?php echo $mostrar['nombre']?></td>
            <td><?php echo $mostrar['email']?></td>
            <td>
            <a href="editar.php?id=<?= $mostrar["id"]; ?>">Editar</a>
            <a href="eliminar.php?id=<?= $mostrar["id"]; ?>">Eliminar</a>
            </td>
        </tr>
            <?php 
            }
            ?>
    </table>
    </form>
    <form action="crear.php">
    <div>
        <br>
        <button type="submit">Agregar</button>
    </div>
    </form>
</body>
</html>