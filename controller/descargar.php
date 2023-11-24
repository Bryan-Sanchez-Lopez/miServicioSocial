<?php 
include("../model/dbConection.php");

$id = $_GET["id"];

$consulta = "SELECT * FROM documento WHERE idDocumento='$id'";
$resultado = mysqli_query($conexion,$consulta);

if(mysqli_num_rows($resultado) == 1){
    $fila = mysqli_fetch_assoc($resultado);
    $archivo = $fila["archivo"];
    $ruta_archivo = "files/".$archivo;

    if(file_exists($ruta_archivo)){
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename="'.$archivo.'"');
        readfile($ruta_archivo);
    }else{
        echo"El archivo no existe";
    }
}else{
    echo "El archivo no se encontro";
}

?>