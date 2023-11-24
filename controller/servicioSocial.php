<?php 

// echo $_POST["nombre"];
// echo $_POST["archivo"];

if(isset($_FILES['archivo'])){
    extract($_POST);

    $nombre = $_POST["nombre"];
    $carpeta_destino = "files/";

    $archivo = basename($_FILES["archivo"]["name"]);
    $extencion = strtolower(pathinfo($nombre, PATHINFO_EXTENSION));

    if(move_uploaded_file($_FILES["archivo"]["tmp_name"], $carpeta_destino.$archivo)){
        include("../model/dbConection.php");
        $consulta = "INSERT INTO documento (nombre, archivo, idUsuario) VALUES ('$nombre', '$archivo', 1)";
        $resultado = mysqli_query($conexion, $consulta);
        if($resultado){
            header("Location: /pruebas_software/views/main/servicioSocial.php");
        }
    }

}

session_start();

if (isset($_POST['cerrar_sesion'])) {
    // Si el botón "Cerrar Sesión" fue presionado
    // Destruye la sesión
    session_destroy();

    // Redirige a la página de inicio de sesión u otra página
    header("Location: /pruebas_software/");
    exit();
} 


?>