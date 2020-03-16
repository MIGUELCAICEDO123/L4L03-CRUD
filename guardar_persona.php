<?php
include("includes/db.php");
//Tomar, recuperar datos
$nombre=$_POST["nombre"];
$email=$_POST["email"];
//echo "Informacion enviada:<br>Nombre:$nombre <br>Email:$email ";
$sql="insert into persona(nombre,email) values('$nombre','$email')";
DB::query($sql);
/*if($con->query($query)){//$con->query($query)==true
    echo "Persona Guardada";
}else{
    echo "No se ha podido guardar:<br>".$con->error;
}
*/
header('location: index.php');
?>
