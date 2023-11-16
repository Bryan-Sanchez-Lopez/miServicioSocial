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
        </div>   
    </nav>

    <div class="card text-center">
        <br><br>
        <div class="card-body">
            <h5 class="card-title">Inicia sesión en MiServicioSocial</h5>


            <form action="/pruebas_software/views/main/vistaAlumno.php">
                <div class="mb-3">
                    <label for="email" class="form-label">Correo institucional</label>
                    <input type="email" class="form-control" id="email" placeholder="matricula@uppenjamo.edu.mx">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Contraseña</label>
                    <input type="password" class="form-control" id="password">
                </div>
                <button type="submit" class="btn btn-primary">Entrar</button>
            </form> 
        </div>
        <div class="card-footer text-body-secondary">
            Universidad Politecnica de Pénjamo
        </div>
    </div>







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>