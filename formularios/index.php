<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <title>Mis practicas</title>
    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
    />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
    <link rel="stylesheet" href="./css/custom.css" />
  </head>
  <body>
    <header class="mb-5">

    <nav class="navbar navbar-expand-md navbar-dark bg-dark pl-5 pr-5">
    <a class="navbar-brand" href="#">Formularios</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mr-auto">
            
        </ul>
        <ul class="navbar-nav pr-5">
            <li class="nav-item active">
                <a class="nav-link" href="./index.php">Inicio</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./create.php">Crear producto</a>
            </li>
        </ul>
    </div>
</nav>


    
    
    </header>

    <div class="customMargins">
      <div class="row d-flex">
        <div class="col-md-9">
          <div class="card">
            <div class="card-body">
              <div class="table-responsive">
                  <table class="table">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Producto</th>
                    <th scope="col">Costo</th>
                    <th scope="col">Unidades</th>
                    <th scope="col">Descripción</th>
                    <th scope="col">Editar</th>
                    <th scope="col">Eliminar</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  require('./scripts/load.php');
                  ?>
                </tbody>
              </table>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-3">
          <div class="card">
            <div class="card-header">
              <h2 class="card-title">Tema</h2>
            </div>
            <div class="card-body">
              <p>
                El trabajar con formularios, nos permite realizar peticiones via
                request a nuestro servidor. Para iniciarnos en el trabajo
                empezaremos utilizando POST y GET.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script src="./js/main.js"></script>
  </body>
</html>
