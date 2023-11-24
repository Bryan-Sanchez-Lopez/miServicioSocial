<?php 
include("../model/dbConection.php");

$correo = $_POST["email"];
$password = $_POST["password"];

$consulta = "SELECT * FROM usuario WHERE correo='$correo' AND password='$password'";
$resultado = $conexion->query($consulta);

// Inicia la sesión
session_start();

if( $resultado->num_rows > 0){

    $_SESSION['autenticado'] = true;
    header("Location: /pruebas_software/views/main/vistaAlumno.php");
    // while($fila = $resultado->fetch_assoc() ){
    //     echo"id: ".$fila["idUsuario"]."Nombre".$fila["Nombre"];
    // }
}else{
    header("Location: /pruebas_software/");
}
?>