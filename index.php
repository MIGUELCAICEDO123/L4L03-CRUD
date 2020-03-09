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
        <tr style="background-color: red">
            <td>id</td>
            <td>nombre</td>
            <td>email</td>
        </tr>
        <tr>
            <?php
           
            $con= new mysqli("localhost","root","","persona");
            $query="select * from persona";
            $insert = mysqli_query($con,$query);
            while($impres=mysqli_fetch_array($insert)){
                
            ?>
             <td><?php  echo $impres['id']?></td>
             <td><?php  echo $impres['nombre']?></td>
             <td><?php  echo $impres['email']?></td>
            </tr>
            <?php 
            }
            $con->close();
            ?>
    </table>
    </form>
    <form action="crear.php">
    <div>
        <br>
        <button type="submit">AGREGAR</button>
    </div>
    </form>
</body>
</html>