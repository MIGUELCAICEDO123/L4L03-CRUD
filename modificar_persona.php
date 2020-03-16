<?php
include("includes/db.php");
//Tomar, recuperar datos
$nombre=$_POST["nombre"];
$email=$_POST["email"];
$id=(int)$_POST["id"];
$sql="UPDATE `persona`.`persona` SET `nombre`='$nombre', `email`='$email' WHERE  `id`='$id'";
DB::query($sql);
header('location: index.php');
?>
