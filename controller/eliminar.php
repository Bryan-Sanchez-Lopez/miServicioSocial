<?php  

include("../model/dbConection.php");
$id = $_GET["id"];
$consulta = "DELETE FROM documento WHERE idDocumento = '$id'";
$resultado = mysqli_query($conexion,$consulta);

if($resultado){
    header("Location: /pruebas_software/views/main/servicioSocial.php");
}
else{
    header("Location: /pruebas_software/views/main/servicioSocial.php");

}

?>