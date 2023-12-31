<?php 
// Inicia la sesión
session_start();

// Verifica si el usuario está autenticado
if (!isset($_SESSION['autenticado']) || $_SESSION['autenticado'] !== true) {
    header("Location: /pruebas_software/");
    exit();
}

?>



<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <nav class="navbar bg-dark">
        <div class="container-fluid justify-content-center">
            <a class="navbar-brand text-light">
                MiServicioSocial
            </a>
            <form method="post" action="/pruebas_software/controller/servicioSocial.php">
                <input type="submit" name="cerrar_sesion" value="Cerrar Sesión" class="btn bg-dark text-light">
            </form>
        </div>   
    </nav>


    <ul class="nav nav-pills nav-fill">
        <li class="nav-item">
            <a class="btn btn-light p-4" href="/pruebas_software/views/main/servicioSocial.php" role="button"> Servicio social</a>
        </li>
        <li class="nav-item">
            <a class="btn btn-light p-4" href="#" role="button"> Estancia 1</a>
        </li>
        <li class="nav-item">
            <a class="btn btn-light p-4" href="#" role="button"> Estancia 2</a>
        </li>
        <li class="nav-item">
            <a class="btn btn-light p-4" href="#" role="button"> Estadia</a>
        </li>
    </ul>

    <img src="../resources/img4.jpg" alt="">




