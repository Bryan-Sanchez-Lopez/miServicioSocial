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
                Servicio social
            </a>
        </div>   
    </nav>

    <div class="card text-center">
        <br><br>
        <div class="card-header">
            <h5 class="card-title">Sube tus documentos aqui</h5>
            <p class="card-text">Con MiServicioSocial ahora todo es mas facil</p>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ssModal">
                Subir documentos
            </button>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre del archivo</th>
                    <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php include("../../model/dbConection.php");
                    $consulta = mysqli_query($conexion,"SELECT * FROM documento");
                    foreach($consulta as $row):
                    ?>
                    <tr>
                        <td><?php echo $row["idDocumento"]; ?></td>
                        <td><?php echo $row["nombre"]; ?></td> 
                        <td>
                            <a href="/pruebas_software/controller/descargar.php?id=<?php echo $row["idDocumento"]?>" role="button" class="btn btn-success">Descargar</a>                    
                            <button type="button" class="btn btn-danger">Eliminar</button>
                        </td>
                    </tr>
    
                    <?php endforeach; ?>

                </tbody>
            </table>
        </div>
        <div class="card-footer text-body-secondary">
            2 days ago
        </div>
    </div>

















    <!-- Modal -->
    <div class="modal fade" id="ssModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Subir documentos</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="/pruebas_software/controller/servicioSocial.php" method="post" enctype="multipart/form-data">
                    <select class="form-select" aria-label="Default select example" name="nombre" id="nombre">
                        <option selected name="nombre">Selecciona el documento a subir</option>
                        <option value="Registro al servicio social">Registro al servicio social</option>
                        <option value="Reporte de actividades">Reporte de actividades</option>
                        <option value="Carta de finalizacion">Carta de finalizacion</option>
                    </select>
                    <div class="mb-3">
                        <label for="formFileMultiple" class="form-label">Documento a subir</label>
                        <input class="form-control" type="file" id="ruta" name="archivo" required>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Subir</button>                    </div>
                </form>
            </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
    