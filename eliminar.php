<?php
include("includes/db.php");
$id=(int)$_GET["id"];
$sql="DELETE FROM `persona`.`persona` WHERE  `id`=$id;";
DB::query($sql);
header('location: index.php');
?>