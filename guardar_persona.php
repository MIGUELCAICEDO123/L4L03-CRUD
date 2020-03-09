<?php
    //datos de conexion
    $host = "localhost";
    $user = "root";
    $password ="";
    $db = "persona";
////////////////////////////////////////////////////
    //crear la conexion 
    $con = new mysqli($host, $user, $password, $db);
///////////////////////////////////////////////////
    //prueba de conexion
    if($con->connect_error){
        echo "base de datos no disponible <br>";
    }else{
        echo "conectado a la base de datos <br>";
    }
////////////////////////////////////////////////
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];

    //echo "la informacion enviada es: Nombre: $nombre Email $email";
    $query = "insert into persona(nombre,email) values('$nombre', '$email')";

    if($con->query($query)){//if($con->query($query)) == true
        echo "persona gurdada correctamente";
    }else{
        echo "no se a podido guardar la persona" . $con->error;
    }

    $con->close();
    header('Location: crear.php');
?>

