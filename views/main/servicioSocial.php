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


    <ul class="nav nav-pills nav-fill">
        <li class="nav-item">
            <a class="btn btn-light p-4" href="#" role="button"> Servicio social</a>
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


    <div class="card text-center">
        <div class="card-body">
            <br><br>
            <h5 class="card-title">Sube tus documentos aqui</h5>
            <p class="card-text">Con MiServicioSocial ahora todo es mas facil</p>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Subir documentos
            </button>
        </div>
        <div class="card-footer text-body-secondary">
            Universidad Politecnica De Penjamo
        </div>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Subir documentos</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Selecciona el documento a subir</option>
                        <option value="1">Registro al servicio social</option>
                        <option value="2">Reporte de actividades</option>
                        <option value="3">Carta de finalizacion</option>
                    </select>
                    <br>
                    <div class="mb-3">
                        <label for="formFileMultiple" class="form-label">Multiple files input example</label>
                        <input class="form-control" type="file/multipart" id="formFileMultiple" multiple>
                    </div>
                    <button type="submit" class="btn btn-primary">Subir</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
    